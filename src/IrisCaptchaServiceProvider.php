<?php
namespace IrisDev\IrisCaptcha;

use Illuminate\Support\ServiceProvider;

class IrisCaptchaServiceProvider extends ServiceProvider
{
       public function boot()
       {
           // dd("Package Hello");
           $this->publishes([
                __DIR__.'/../config/iriscaptcha.php' => config_path('iriscaptcha.php')
           ]);
       }

       public function register()
       {
           $this->app->singleton(IrisCaptcha::class,function(){
                 return new IrisCaptcha();
           });
       }
} 