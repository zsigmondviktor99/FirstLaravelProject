<!--Views >> layouts >> layout-->
@extends('layouts.layout')

@section('content')
<div class="wrapper pizza-details">
    <h1>Order for {{ $onePizza->name }}</h1>
    <p>Type - {{ $onePizza->type }}</p>
    <p>Base - {{ $onePizza->base }}</p>
    <p class="toppings">Extra toppings:</p>
    <ul>
        <!--Pizza controller ebbe a view-ba 1db pizzát ad az ID-val-->
        @foreach($onePizza->toppings as $topping)
            <li>{{ $topping }}</li>
        @endforeach
    </ul>

    <!--
        - Action >> amelyik linken (endpoint) végre akarjuk hajtani
        - A HTML tag-be POST, mert a DELET-et nem feltétlen ismeri, de
          a blade segítségével lejjebb felülírjuk
    -->
    <form action="/pizzas/{{ $onePizza->id }}" method="POST">
        @csrf
        @method('delete')
        <button>Complete order</button>
    </form>
</div>
<a href="/pizzas" class="back"><-- Back to all pizzas</a>
@endsection

<!--<img src="/img/{ $id }.png" alt="Pizza { $id }" title="Pizza { $id }"> MISSING {} DUE TO ERRORS, IF YOU NEED THIS CODE, REPLACE THEM-->