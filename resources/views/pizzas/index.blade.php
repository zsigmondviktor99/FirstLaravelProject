<!--Views >> layouts >> layout-->
@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Pizza List
        </div>

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
            <div>
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

                {{ $p->name }} - {{ $p->type }} - {{ $p->base }}

                <br><br>
            </div>
        @endforeach 

        <!--Normal PHP
         @php
            $name = 'shaun';
             echo $name;
         @endphp-->
    </div>
</div>
@endsection