<?php

Weapon::add('SHIPMENT_REGION_BOTTOM', function() use($config, $speak) {
    if(Config::get('is.posts', false)) {
        $c = clone $config->states->{'plugin_' . md5(File::B(__DIR__))};
        $c->text->load = sprintf($c->text->load, $speak->load . ' ' . $speak->more);
        $c->text->loading = sprintf($c->text->loading, $speak->loading);
        $c->text->loaded = sprintf($c->text->loaded, $speak->loaded);
        $c->text->error = sprintf($c->text->error, $speak->error);
        echo Asset::javascript(__DIR__ . DS . 'assets' . DS . 'sword' . DS . 'infinite-scroll.min.js');
        echo O_BEGIN . str_repeat(TAB, 2) . '<script>var infinite_scroll=new InfiniteScroll(' . json_encode($c) . ');</script>' . O_END;
    }
});