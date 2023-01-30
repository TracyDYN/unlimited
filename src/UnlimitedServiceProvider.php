<?php  
namespace Dyn\Unlimited;
use Illuminate\Support\ServiceProvider;
class UnlimitedServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // 发布配置文件
        $this->publishes([
            __DIR__.'/config/unlimited.php' => config_path('unlimited.php'),
        ]);
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('unlimited', function ($app) {
            return new Unlimited($app['config']);
        });
    }
}