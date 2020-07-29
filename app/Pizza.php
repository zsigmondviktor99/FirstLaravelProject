<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    //Pizza name --> connect to Pizzas table
    //Modify connected table:
    protected $table = 'pizzahouse.pizzas';
}
