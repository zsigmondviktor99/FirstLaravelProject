<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

//php artisan make:controller PizzaController
class PizzaController extends Controller
{
    /*PizzaController által vezérelt route-oknál BE KELL LÉPNI
    public function __construct(){
        $this->middleware('auth');
    }*/

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
        //$pizzas = Pizza::latest()->get();   //latest by "created_at" field
        $pizzas= Pizza::orderBy('id')->get();

        //given by URL parameter
        //$name = request('name');
        //$age = request('age');
    
        //blade var name => var name here
        return view('pizzas.index', [
            'pizzas' => $pizzas,
            /*'name' => request('name'),
            'age' => request('age')*/
        ]);
    }

    public function show($id){
        //use the $id variable to query the db for a record
        //return view('pizzas.show', ['id' => $id]);

        //findOrFail --> if there is a correct id, it is okay, if not, error page, not timeout
        $pizza = Pizza::findOrFail($id);
        return view('pizzas.show', ['onePizza' => $pizza]);
    }

    public function create(){
        return view('pizzas.create');
    }

    public function store(){
        /*error_log(request('name')); //the 'name' valued name attribute from create.blade.php will be shown in the terminal
        error_log(request('type'));
        error_log(request('base'));*/

        //Pizza MODEL példány eltárolva egy változóba, így rakjuk az ab-ba
        $pizza = new Pizza();

        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');

        //error_log($pizza);

        $pizza->save(); //elmentjük a $pizza változót az adatbázisba (a $pizza a Pizza egy példánya, ezért működik a megfelelő adatbázissal)

        //Az adat ezzel fog érkezni a /pizzas főoldalra, ahol ezt tudjuk majd használni >> with
        return redirect('/')->with('mssg', 'Thanks for your order'); //go back to homepage
        //on Create view >> @csrf TO MAKE IT WORK WITH SAFE
    }

    public function destroy($id){
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();

        return redirect('/pizzas');
    }
}
