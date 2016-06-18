<?php
use Evenement\EventEmitterInterface;
use Peridot\Plugin\Watcher\WatcherPlugin;

return function(EventEmitterInterface $emitter) {
    // watche plugin
    $watcher = new WatcherPlugin($emitter);
    $watcher->track(__DIR__ . '/src');
};
