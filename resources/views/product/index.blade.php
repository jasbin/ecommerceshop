@extends('layouts.app')

@section('content')

        <div class="top-product-style">
            <h2>{{$categoryName ?? null}} Products</h2>
            @foreach($products as $product)
                @include('includes.single-product   ')
            @endforeach
        </div>

@endsection
