<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\ProductType;
use App\Cart;
use Session;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        view()->composer('header',function($view){
              $loai_sp=ProductType::all();
           $view->with('loai_sp',$loai_sp);
             
        });
        view()->composer(['header','post.checkout'],function($view){
            if(Session('cart')){
                  $oldCart=Session::get('cart');
                  $cart=new Cart($oldCart);
                  $view->with(['cart'=>Session::get('cart'),'product_cart'=>$cart->items,'totalPrice'=>$cart->totalPrice,'totalQty'=>$cart->totalQty]);
              }
        });

        
    }
}
