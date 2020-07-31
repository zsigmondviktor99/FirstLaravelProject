<!--Views >> layouts >> layout-->
@extends('layouts.layout')

@section('content')
<div class="wrapper pizza-details">
    <h1>Order for {{ $onePizza->name }}</h1>
    <p>Type - {{ $onePizza->type }}</p>
    <p>Base - {{ $onePizza->base }}</p>
</div>
<a href="/pizzas" class="back"><-- Back to all pizzas</a>
@endsection

<!--<img src="/img/{ $id }.png" alt="Pizza { $id }" title="Pizza { $id }"> MISSING {} DUE TO ERRORS, IF YOU NEED THIS CODE, REPLACE THEM-->