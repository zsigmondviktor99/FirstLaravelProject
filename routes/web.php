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


Route::get('/pizzas1', function () {
    //get data drom database and pass the datas as an array into the view
    $pizza = [
        'type' => 'hawaiian',
        'base' => 'garlic crust',
        'price' => 10 
    ];
    return view('pizzas1', $pizza);

    //return 'pizzas';
    //return ['name' => 'veg pizza', 'base' => 'classic'];
});


Route::get('/pizzas2', function () {
    $pizzas = [
        ['type' => 'hawaiian', 'base' => 'cheesy crust'],
        ['type' => 'volcano', 'base' => 'garlic crust'],
        ['type' => 'veg supreme', 'base' => 'thin & crispy']
    ];

                            //blade var name => var name here
    return view('pizzas2', ['pizzasss' => $pizzas]);
});
