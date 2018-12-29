<p>
    
   <?php echo elgg_echo('thewire-websitecards:settings:top') . "<br /><br />"; ?>

   <strong><?php echo elgg_echo('thewire-websitecards:settings:api'); ?>:</strong> <input type="text" name="params[opengraph_api_key]" value="<?php echo elgg_get_plugin_setting('opengraph_api_key', 'thewire-websitecards'); ?>" />
   <br /><span><?php echo elgg_echo('thewire-websitecards:settings:apimore'); ?></span>
   
   <br /><br />
   
   <strong><?php echo elgg_echo('thewire-websitecards:settings:css'); ?>:</strong> <input type="text" name="params[card_css_class]" value="<?php echo elgg_get_plugin_setting('card_css_class', 'thewire-websitecards'); ?>" />
   <br /><span><?php echo elgg_echo('thewire-websitecards:settings:cssmore'); ?></span>
   
</p>