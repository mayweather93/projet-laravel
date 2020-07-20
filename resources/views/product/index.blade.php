@extends('layouts.app')


@section('content')

<div class="container">

    <h2> {{ $categoryName ?? null }} Products </h2>

    <div class="row">
    @foreach ($products as $product)

        @include('product._single_product')
    @endforeach

    </div>


</div>

@endsection
