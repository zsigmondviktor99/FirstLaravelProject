<!--Views >> layouts >> layout-->
@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif
    <div class="content">
        <img src="/img/pizza-house-logo.png" alt="Pizza House" title="Pizza House" class="welcomeLogo">
        <div class="title m-b-md">
            The North's Best Pizzas
        </div>

        <!--
            Csak akkor látjuk, ha a formról jövünk (create.blade.php)
            Ez az adat 'JÖN' az adattal (a pizzarendeléssel)
        -->
        <p class="mssg">{{ session('mssg') }}</p>
                <!--/pizzas/create helyett, web.php route nevek-->
        <a href="{{ route('pizzas.create') }}">Order a Pizza</a><br>
    </div>
</div>
@endsection