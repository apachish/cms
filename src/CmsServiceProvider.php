<?php
/**
 * Created by PhpStorm.
 * User: shahriar
 * Date: 3/8/19
 * Time: 1:33 AM
 */

namespace Shahriar\Cms;

use Caffeinated\Flash\Facades\Flash;
use Caffeinated\Flash\FlashServiceProvider;
use Illuminate\Routing\Router;

use Illuminate\Support\ServiceProvider;
use Shahriar\Cms\app\Http\Middleware\Admin;

class CmsServiceProvider extends ServiceProvider
{
        public function register()
        {
            $this->app->singleton('cms',function (){
                return new Cms;
            });

            $this->mergeConfigFrom(__DIR__.'/config/cms.php','cms');
            $this->app->register(FlashServiceProvider::class);
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('Flash',Flash::class);
        }

        public function boot(){


            require __DIR__.'/routes/web.php';


            $this->app[Router::class]->aliasMiddleware('admin', Admin::class);

            $this->loadViewsFrom(__DIR__.'/resources/views','cms');

            $this->publishes([
                __DIR__.'/config/cms.php' => config_path('cms.php'),
            ],'cms-config');
            $this->publishes([
                __DIR__.'/resources/views' => base_path('/resources/views/cms')
            ],'cms-views');
            $this->publishes([
                __DIR__.'/database/migrations'=> database_path('/migrations')
            ],'cms-migration');
        }
}