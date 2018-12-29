<?php

elgg_register_event_handler('init', 'system', 'twog_init');

function twog_init() {


    elgg_extend_view('object/thewire', 'card/thewire');
    elgg_extend_view('river/elements/body', 'card/river');
    elgg_extend_view('elgg.css', 'card/css');
    
    if (elgg_get_plugin_setting('opengraph_api_key', 'thewire-websitecards') == null) {
     
        require(elgg_get_plugins_path() . "thewire-websitecards" . "/vendor" . "/opengraph-fetch/opengraph.php");

        
    }

    
    if (elgg_get_plugin_setting('card_css_class', 'thewire-websitecards') == null) {
        
        elgg_set_plugin_setting('card_css_class', 'wire-preview-card', 'thewire-websitecards');
        
    }


}
