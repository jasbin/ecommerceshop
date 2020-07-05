@extends('layouts.app')

@section('content')
    <h2>Submit your Shop</h2>

    <form action="{{route('shops.store')}}">
        @csrf
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="" aria-describedby="helpId">
            <small id="helpId" class="text-muted">Shop Name that you want to Register</small>
        </div>

        <div class="form-group">
            <label for="">Description</label>
            <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
            <small id="helpId" class="text-muted">Descrition about your Shop</small>
        </div>

        <input class="btn-primary" type="submit" value="Submit">
    </form>
@endsection
