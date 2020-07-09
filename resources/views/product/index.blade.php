@extends('layouts.app')

@section('content')

        <div class="container">
            <div class="top-product-style">
                <div id="electro1">
                    <h2>{{$categoryName ?? null}} Products</h2>
                    <div class="custom-row-2">
                        @foreach($products as $product)
                            @include('includes.single-product')
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

@endsection
