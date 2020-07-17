<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//php artisan make:contoller PizzaController
class PizzaController extends Controller
{
    public function index(){
        //get data from db
        $pizzas = [
            ['type' => 'hawaiian', 'base' => 'cheesy crust', 'price' => 10 ],
            ['type' => 'volcano', 'base' => 'garlic crust', 'price' => 16 ],
            ['type' => 'veg supreme', 'base' => 'thin & crispy', 'price' => 20 ]
        ];
    
        //given by URL parameter
        //$name = request('name');
        //$age = request('age');
    
        //blade var name => var name here
        return view('pizzas', [
            'pizzasss' => $pizzas,
            'nameee' => request('name'),
            'ageee' => request('age')
        ]);
    }

    public function show($id){
        //use the $id variable to query the db for a record
        return view('details', ['id' => $id]);
    }
}
