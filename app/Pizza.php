<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    //Pizza name --> connect to Pizzas table
    //Modify connected table:
    protected $table = 'pizzahouse.pizzas';

    //CASTING
    protected $casts = [
        //Ha a DB-be rakunk, az array-t JSON-ná alakítja
        //Ha lekérdezünk a DB-ből, a JSON-t array-é alakítja
        'toppings' => 'array'
    ];
}
