<?php

namespace TCG\Voyager\Providers;

use Arrilot\Widgets\ServiceProvider as WidgetServiceProvider;
use Illuminate\Support\ServiceProvider;
use Phalcon\Config;
use TCG\Voyager\Seed;

class VoyagerDummyServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->register(WidgetServiceProvider::class);

        $this->registerConfigs();

        if ($this->app->runningInConsole()) {
            $this->registerPublishableResources();
        }
    }

    /**
     * Register the publishable files.
     */
    private function registerPublishableResources()
    {
        $publishablePath = dirname(__DIR__) . '/../publishable';

        $publishable = [
            'dummy_seeds' => [
                "{$publishablePath}/database/dummy_seeds/" => database_path(Seed::getFolderName()),
            ],
            'dummy_content' => [
                "{$publishablePath}/dummy_content/" => storage_path('app/public'),
            ],
            'dummy_config' => [
                "{$publishablePath}/config/voyager_dummy.php" => config_path('voyager.php'),
            ],
            'dummy_migrations' => [
                "{$publishablePath}/database/migrations/" => database_path('migrations'),
            ]
        ];
        //添加中文支持
        if (config('app.locale') === 'zh_CN') {
            $publishable['zh_CN'] = [
                "{$publishablePath}/lang/zh_CN/zh_CN.json" => base_path('resources/lang/zh_CN.json'),
            ];
        }

        foreach ($publishable as $group => $paths) {
            $this->publishes($paths, $group);
        }
    }

    public function registerConfigs()
    {
        $this->mergeConfigFrom(
            dirname(__DIR__) . '/../publishable/config/voyager_dummy.php',
            'voyager'
        );
    }
}
