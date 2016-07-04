<?php

Weapon::add('SHIPMENT_REGION_BOTTOM', function() use($config, $speak) {
    if(Config::get('is.posts', false)) {
        $c_infinite_scroll = clone $config->states->{'plugin_' . md5(File::B(__DIR__))};
        $c_infinite_scroll->text->load = sprintf($c_infinite_scroll->text->load, $speak->load . ' ' . $speak->more);
        $c_infinite_scroll->text->loading = sprintf($c_infinite_scroll->text->loading, $speak->loading);
        $c_infinite_scroll->text->loaded = sprintf($c_infinite_scroll->text->loaded, $speak->loaded);
        echo O_BEGIN . str_repeat(TAB, 2) . '<script>var plugin_infinite_scroll_config=' . json_encode($c_infinite_scroll) . ';</script>' . O_END;
        echo Asset::javascript(__DIR__ . DS . 'assets' . DS . 'sword' . DS . 'do.js', "", 'sword/infinite-scroll.min.js');
    }
});