<?php

$post_text = $vars['text'];

preg_match_all('#\bhttps?://[^,\s()<>]+(?:\([\w\d]+\)|([^,[:punct:]\s]|/))#', $post_text, $urls);

$use_api = false;

if (elgg_get_plugin_setting('opengraph_api_key', 'thewire-websitecards')) {
    
    $opengraph_api_key = elgg_get_plugin_setting('opengraph_api_key', 'thewire-websitecards');
    
    $use_api = true;
    
}

if (count($urls[0]) > 0) {
    
    $url_to_use = end($urls[0]);
    
    $url_to_use_encoded = urlencode($url_to_use);
    
    if ($use_api) {
    
     $api_data = file_get_contents("https://opengraph.io/api/1.1/site/$url_to_use_encoded?app_id=$opengraph_api_key");
    
     $api_data = json_decode($api_data, true);
    
     $api_data = $api_data["hybridGraph"];
     
     $title = $api_data['title'];
     
     $image_url = $api_data['image'];
     
     $description = $api_data['description'];
    
    } else {
    
        $opengraph_data = OpenGraph::fetch($url_to_use);
        
        $image_url = $opengraph_data->image;
        
        $title = $opengraph_data->title;
    
        $description = $opengraph_data->description;
    
    }

    ?>
    <?php if ($image_url != null) { ?>
    <div class="<?php echo elgg_get_plugin_setting('card_css_class', 'thewire-websitecards'); ?>">
      <div class="item"><a title="<?php echo $title; ?>" href="<?php echo $url_to_use; ?>" target="_BLANK"><img src ="<?php echo $image_url; ?>" style="width: 98%;"></a></div> 
      <div class="item">
      	<h3><a title="<?php echo $title; ?>" href="<?php echo $url_to_use; ?>" target="_BLANK"><?php echo $title; ?></a></h3>
      	<p><?php echo $description; ?></p>
      	<p><a title="<?php echo elgg_echo('thewire-websitecards:readmore'); ?>" href="<?php echo $url_to_use; ?>"><?php echo elgg_echo('thewire-websitecards:readmore'); ?></a></p>
      </div>
    </div>
    <br /><br />
    <?php } ?>
    <?php
    
    }
    ?>