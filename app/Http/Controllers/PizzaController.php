<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

//php artisan make:contoller PizzaController
class PizzaController extends Controller
{
    //XAMPP start apache and mysql >> mysql -u root >> create database pizzahouse; >> .env >> DB_DATABASE=dbname
    //Also you can create new username and password there (DB_USERNAME=root, DB_PASSWORD=)
    //You can check things ing PHP MyAdmin

    public function index(){
        /*$pizzas = [
            ['type' => 'hawaiian', 'base' => 'cheesy crust', 'price' => 10 ],
            ['type' => 'volcano', 'base' => 'garlic crust', 'price' => 16 ],
            ['type' => 'veg supreme', 'base' => 'thin & crispy', 'price' => 20 ]
        ];*/

        //get data from db
        //$pizzas = Pizza::all(); //all of the records from Pizza MODEL
        //$pizzas = Pizza::orderBy('name', 'desc')->get(); //::all() contains get(), but here we need it
        //$pizzas = Pizza::where('type', 'hawaiian')->get();
        $pizzas = Pizza::latest()->get();   //latest by "created_at" field

        //given by URL parameter
        //$name = request('name');
        //$age = request('age');
    
        //blade var name => var name here
        return view('pizzas', [
            'pizzas' => $pizzas,
            /*'name' => request('name'),
            'age' => request('age')*/
        ]);
    }

    public function show($id){
        //use the $id variable to query the db for a record
        return view('details', ['id' => $id]);
    }
}
