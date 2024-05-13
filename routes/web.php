<?php

use Illuminate\Support\Facades\Route;
use \App\Models\Category as Category;
use \App\Models\Product as Product;
use \App\Models\Service as Service;
use \App\Models\Promotion as Promotion;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function (){
    return view('home',
        [
            'categories' => Category::where('visibility', true)->get(),
            'categoriesOnMainPage' =>Category::where('visibility', true)->where('visibilityOnMainPage', true)->get(),
            'services' => Service::all(),
            'productsPopulate' => Product::where('visibility', true)->where('isPopulate', true)->orderBy('order')->get(),
            'productsBenefit' => Product::where('visibility', true)->where('isBenefit', true)->orderBy('order')->get(),
        ]);
});

Route::get('/catalog', function (){
    return view('catalog',
        [
            'categories' => Category::where('visibility', true)->get()
        ]);
});

Route::get('/promotions', function (){
    return view('promotions', [
        'categories' => Category::where('visibility', true)->get(),
        'promotions' => Promotion::all(),
    ]);
});

Route::get('/promotions/{promotion}', function (Promotion $promotion){
    return view('promotion',
        [
            'categories' => Category::where('visibility', true)->get(),
            'promotion' => $promotion
        ]
    );
});

Route::get('/catalog/{category}', function (Category $category){
    return view('category',
        [
            'category' => $category,
            'products' => $category->products()->where('visibility', true)->get(),
            'categories'=> Category::where('visibility', true)->get(),
            'minPrice' => $category->products()->where('visibility', true)->min('price'),
            'maxPrice' => $category->products()->where('visibility', true)->max('price'),
        ]
    );
});

Route::get('/catalog/{category}/{product}', function (Category $category, Product $product){
    return view('product',
        [
            'category' => $category,
            'product' => $product,
            'categories'=> Category::where('visibility', true)->get(),
            'services' => Service::all(),
        ]
    );
});

Route::get('/services', function (Category $category){
    return view('services',
        [
            'categories' => Category::where('visibility', true)->get(),
            'services' => Service::all(),
        ]
    );
});

Route::get('/service/{service}', function (Category $category, Service $service){
    return view('service',
        [
            'categories' => Category::where('visibility', true)->get(),
            'service' => $service,
            'services' => Service::all(),
        ]
    );
});

Route::get('/contacts', function (){
    return view('contact',
        [
            'categories' => Category::where('visibility', true)->get(),
        ]
    );
});
