<?php namespace Admin\Statistics;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'          => 'Statistics',
            'description'   => 'Manage statistics',
            'author'        => 'Terefs',
            'icon'          => 'icon-map-marker',
        ];
    }
    public function registerComponents()
    {
        return [
            'Admin\Statistics\Components\Statistics' => 'statistics',
        ];
    }
}
