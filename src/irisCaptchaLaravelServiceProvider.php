<?php
namespace IrisDev\iriscaptchalaravel;

use Illuminate\Support\ServiceProvider;

class iriscaptchalaravelServiceProvider extends ServiceProvider
{
       public function boot()
       {
           // dd("Package Hello");
           $this->publishes([
                __DIR__.'/../config/iriscaptchalaravel.php' => config_path('iriscaptchalaravel.php')
           ]);
       }

       public function register()
       {
           $this->app->singleton(iriscaptchalaravel::class,function(){
                 return new iriscaptchalaravel();
           });
       }
} 