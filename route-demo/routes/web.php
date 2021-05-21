<?php

use Illuminate\Support\Facades\Route;

use app\Http\Controllers;
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
Route::get('/', 'HomeController@index');

//Route::get('/', function (){
//    echo "<h2>This is home page!</h2>";
//});

Route::get('/about', function(){
    echo "<h2>This is About page!</h2>";
});

Route::get("/contact", function(){
    echo "<h2>This is Contact page!</h2>";
});

Route::get("/user/{name?}", function($name="DuyTran"){
//   return view("user", ["name" => "DuyTran"]);
    echo "<h2>Welcome, $name </h2>";
});




