<!--Views >> layouts >> layout-->
@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Pizza List
        </div>

        <!--
            Data from the web.php >> the array's key is 'type', and we will get the value
            { dynamic / passed data inside blade sintax } >> double {}, just i don't need errors here

            Blade sintax makes coding easier >> laravel compile Blade sintax into regular HTML and shows it for the user
        -->

        <p>{{ $type }} - {{ $base }} - {{ $price }}</p>

        <!--Blade if-->
        @if($price > 15)
            <p>This pizza is expensive</p>
        @elseif($price < 5)
            <p>This pizza is cheap</p>
        @else
            <p>This pizza is normally priced</p>
        @endif

        <!--If this is FALSE, it will executa the code >> 'opposite if'-->
        @unless(@base == 'cheesy crust')
            <p>You don't have a cheesy crost</p>
        @endunless

        <!--Normal PHP-->
         @php
            $name = 'shaun';
             echo $name;
         @endphp
     </div>
</div>
@endsection