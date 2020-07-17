<!--Views >> layouts >> layout-->
@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Pizza List - {{ $id }}
        </div>

        <img src="/img/{{ $id }}.png" alt="Pizza {{ $id }}" title="Pizza {{ $id }}">
    </div>
</div>
@endsection