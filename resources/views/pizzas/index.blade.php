<!--Views >> layouts >> layout-->
@extends('layouts.app')

@section('content')
    <div class="wrapper pizza-index">
        <h1>Pizza Orders</h1>

        <!--<p>{ $name } - { $age }</p>-->

        <!--
            Data from the web.php >> the array's key is 'type', and we will get the value
            { dynamic / passed data inside blade sintax } >> double {}, just i don't need errors here
            Blade sintax makes coding easier >> laravel compile Blade sintax into regular HTML and shows it for the user
        -->

        <!--Blade for loop
            <h3>
                For loop:
            </h3>

            @for($i = 0; $i < 5; $i++)
                <p>The value of i is {{ $i }}</p>
            @endfor
            
            @for($i = 0; $i < count($pizzas); $i++)
                <p>{{ $pizzas[$i]['type'] }}</p>
            @endfor
        -->
        
            <br>

        <!--Blade foreach
            <h3>
                Foreach loop:
            </h3>
        -->
            
        @foreach($pizzas as $p)
            <div class="pizza-item">
               <!--{{ $loop->index }}.: {{ $p['type'] }} - {{ $p['base'] }} - {{ $p['price'] }}

                Blade if
                @if($p['price'] > 15)
                    <p>This pizza is expensive</p>
                @elseif($p['price'] < 5)
                    <p>This pizza is cheap</p>
                @else
                    <p>This pizza is normally priced</p>
                @endif
               
               @if($loop->first)
                    <span> - first in the loop</span>
               @endif
               @if($loop->last)
                    <span> - last in the loop</span>
               @endif

                If this is FALSE, it will executa the code >> 'opposite if'
                @unless($p['base'] == 'cheesy crust')
                    <p>You don't have a cheesy crust</p>
                @endunless-->

                <img src="/img/pizza.png" alt="pizza icon">
               <h4>
                   <a href="/pizzas/{{ $p->id }}">{{ $p->id }}  - {{ $p->name }}</a>
               </h4>

                <br><br>
            </div>
        @endforeach 

        <a href="/" class="back"><-- Back to main menu</a>

        <!--Normal PHP
         @php
            $name = 'shaun';
             echo $name;
         @endphp-->
    </div>
@endsection