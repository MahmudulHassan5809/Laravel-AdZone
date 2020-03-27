<?php

namespace App\Providers;

use App\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        $all_categories = Category::with('addposts')->get();

        $max_price = DB::table('add_posts')->max('price');
        $min_price = DB::table('add_posts')->min('price');


        $all_division =  array(
            'Dhaka' => 'Dhaka',
            'Khulna' => 'Khulna',
            'Rajsgahi' => 'Rajshahi',
            'Barishal' => 'Barishal',
            'Chittagong' => 'Chittagong',
            'Comilla' => 'Comilla'
        );

        $add_type =  array(
            'I want to buy' => 'I want to buy',
            'I Want To Sell' => 'I Want To Sell',
        );

        $condition_type =  array(
            'New' => 'New',
            'Used' => 'Used',
        );

        View::share([
            'all_categories' => $all_categories,
            'all_division' => $all_division,
            'add_type' => $add_type,
            'condition_type' => $condition_type,
            'max_price' => $max_price,
            'min_price' => $min_price
        ]);

    }
}
