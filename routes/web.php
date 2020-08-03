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


/*Route::get('/pizzas1', function () {
    //get data drom database and pass the datas as an array into the view
    $pizza = [
        'type' => 'hawaiian',
        'base' => 'garlic crust',
        'price' => 10 
    ];
    return view('pizzas1', $pizza);

    //return 'pizzas';
    //return ['name' => 'veg pizza', 'base' => 'classic'];
});*/


//The actions are in the Http >> Controllers >> PizzaController.php (the second reference tells the controller and the exact action)
                                                     //pizzas. >> namespace, pl hambiknál hamburger. lesz
Route::get('/pizzas', 'PizzaController@index')->name('pizzas.index')->middleware('auth');
Route::get('/pizzas/create', 'PizzaController@create')->name('pizzas.create');     //You have to put this route before the {id} one, becaouse if not, the create word will be the ID --> wrong view
Route::post('/pizzas', 'PizzaController@store')->name('pizzas.store');
Route::get('/pizzas/{id}', 'PizzaController@show')->name('pizzas.show')->middleware('auth');
Route::delete('/pizzas/{id}', 'PizzaController@destroy')->name('pizzas.destroy')->middleware('auth');

//UI package generálta
//ezen a weboldalon csak a staffok tudnak regisztrálni
Auth::routes([
    'register' => false     //ha már regisztráltál, nem tudsz mégegyszer
]);
//General: Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
