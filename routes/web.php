<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('HelloWorld', function(){
    return "Hello World";
});

Route::get('XinChao', function(){
    echo "<h1>Xin chao</h1>";
});

// Truyen tham so cho route
Route::get('HoTen/{ten}', function($ten){
    echo "Ten cua ban la: ".$ten;
});

Route::get('Ngay/{ngay}', function($ngay){
    echo "Ngay sinh la: ".$ngay;
})->where(['ngay'=>'[0-9]+']);

// Dinh danh
Route::get('Route1', ['as'=>'MyRoute', function(){
    echo "Xin chao cac ban";
}]);

Route::get('Route3', function(){
    echo "Day la route 3";
})->name('MyRoute2');

Route::get('Route2', function(){
    return redirect()->route('MyRoute');
});

// Group
Route::group(['prefix'=>'MyGroup'], function(){
    Route::get('User1', function(){
        echo "User1";
    });
    Route::get('User2', function(){
        echo "User2";
    });
    Route::get('User3', function(){
        echo "User3";
    });
});

// Call Controller
Route::get('CallController', 'MyController@HelloWorld');

Route::get('CallController/{ten}', 'MyController@Hello');

// URL
Route::get('MyRequest', 'MyController@GetURL');