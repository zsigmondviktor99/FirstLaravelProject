<!--Views >> layouts >> layout-->
@extends('layouts.layout')

@section('content')
<div class="wrapper create-pizza">
    <h1>Create a New Pizza</h1>
    
    <!--
        POSTing data for the server (not GETting from the server)
        Pizzas endpoint is existing, but that is a GET method, so that is different >> 
        We can have the same endpoint with different methods
    -->
    <form action="/pizzas" method="POST">
        <!--
            Cross-site Request Forgery
            Laravel makes it easy to protect your application from cross-site request forgery (CSRF) attacks. 
        -->
        @csrf

        <!--Name attribute is to handle this input on server for example - 2nd line-->
        <label for="name">Your name: </label>
        <input type="text" id="name" name="name">
        <br>

        <label for="type">Choose pizza type: </label>
        <select name="type" id="type">
            <option value="margarita">Margarita</option>
            <option value="hawaiian">Hawaiian</option>
            <option value="veg supreme">Veg Supreme</option>
            <option value="volcano">Volcano</option>
        </select>
        <br>

        <label for="base">Choose base type: </label>
        <select name="base" id="base">
            <option value="cheesy crust">Cheesy Crust</option>
            <option value="garlic crust">Garlic Crust</option>
            <option value="thin & crispy">Thin & Crispy</option>
            <option value="thick">Thick</option>
        </select>

        <fieldset>
            <label>Extra toppings:</label><br>

            <!--
                - Name attribútummal hivatkozunk a controllerben
                - Ha ezt beklikkelik, a mushrooms hozzáadódik a tömbhöz majd
                - []! >> tömbként kezelje
            -->
            <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms  <br>
            <input type="checkbox" name="toppings[]" value="peppers">Peppers  <br>
            <input type="checkbox" name="toppings[]" value="garlic">Garlic  <br>
            <input type="checkbox" name="toppings[]" value="olives">Olives  <br>
        </fieldset>

        <input type="submit" value="Order Pizza" name="order" id="order">
    </form>
</div>
@endsection