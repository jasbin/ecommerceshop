@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>Your Cart</h2>

        <table class="table">
            <thead>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cartContents as $item )
                <td>{{$item->name}}</td>
                <td>
                    <form action="{{route('cart.update',$item->id)}}">
                        <input type="number" name="quantity" id="quantity" value="{{$item->quantity}}">
                        <input type="submit" value="update" class="btn btn-primary"/>
                    </form>
                </td>
                <td>{{$item->price}}</td>
                <td>
                    <a href="{{route('cart.destroy',$item->id)}}">
                        <button type="button" class="btn btn-danger">Delete</button>
                    </a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <hr/>
        <h2>Total Price : ${{$totalPrice}}</h2>
        <hr>
        @if(totalCartItems() > 0)
            <a href="{{route('cart.checkout')}}" class="btn btn-primary">Proceed to Checkout</a>
        @endif
    </div>
@endsection
