<?php declare( strict_types=1 );

namespace JacoBaldrich\Tutorials;

final class PluginFactory
{
    public static function create(): Plugin
    {
        static $plugin = null;

        if (null === $plugin) {
            $plugin = new Tutorials();
        }

        return $plugin;
    }
}
