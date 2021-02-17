<?php
namespace IrisDev\irisCaptchaLaravel;

use Illuminate\Support\ServiceProvider;

class irisCaptchaLaravelServiceProvider extends ServiceProvider
{
       public function boot()
       {
           // dd("Package Hello");
           $this->publishes([
                __DIR__.'/../config/irisCaptchaLaravel.php' => config_path('irisCaptchaLaravel.php')
           ]);
       }

       public function register()
       {
           $this->app->singleton(irisCaptchaLaravel::class,function(){
                 return new irisCaptchaLaravel();
           });
       }
} 