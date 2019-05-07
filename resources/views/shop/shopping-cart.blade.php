@extends('layouts.master')

@section('title')
    Shopping Cart
@endsection

@section('content')
    <h1>Shopping Cart</h1>
    @if(Session::has('cart'))
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <ul>
                    <ul class="list-group">
                        @foreach($products as $products)
                            <li class="list-group-item">
                                <span class="badge">{{ $products['quantity'] }}</span>
                                <strong>{{ $products['item']['type'] }}</strong>
                                <strong>{{ $products['item']['size'] }}</strong>
                                <span class="label label-success"> Price £{{ $products['price'] }}</span>
                                <button type="button" class="btn btn-primary btn-sm">
                                    <a href="#">Remove</a>
                                </button>
                            </li>
                        @endforeach
                    </ul>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <strong>Total: £{{ $totalPrice }}</strong>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <button type="button" class="btn btn-success">Process Order</button>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <h1>The Cart is empty!</h1>
            </div>
        </div>

    @endif

@endsection