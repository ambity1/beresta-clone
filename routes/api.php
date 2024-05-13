<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ProductController as ProductController;
use \App\Http\Controllers\CategoryController as CategoryController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
//
//Route::get('/products', [ProductController::class, 'index']);
//Route::get('/product/{id}', [ProductController::class, 'show']);
//Route::get('/products/{category}/{sortBy}', [ProductController::class, 'showByCategory']);
//
//Route::get('/categories', [CategoryController::class, 'index']);


Route::post('/sendMessage', function (Request $request){
    \Illuminate\Support\Facades\Log::info($request);
//    $name = $request->get('name');
//    $phone = $request->get('phone');
//    $ask = $request->get('ask');
//
//    $uriTg = 'https://api.telegram.org/bot';
//    $token = '5282065656:AAHYhLVOShjK1DaJvK0CtCjxm5AEo6kiysg';
//    $action = '/sendMessage?';
//    $chatID = '-4156351475';
//
//    $formAnswer = 'Имя: ' . $name . '%0A' . 'Номер телефона: ' . $phone . '%0A' . 'Вопрос: ' . $ask;
//
//    $text = urlencode($formAnswer);
//    $text = htmlspecialchars($text);
//
//    $url = $uriTg . $token . $action . 'chat_id=' . $chatID . '&text=' . $text;
//
//    $response = Http::get($url);

});
