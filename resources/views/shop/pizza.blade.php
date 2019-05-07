@extends('layouts.master')

@section('title')
    Order Pizza
@endsection

@section('content')
    <h1>Pizza order</h1>

    @foreach($products->chunk(3) as $productChunk)
        <div class="row">
            @foreach($productChunk as $product)
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src={{ $product->imagePath }} alt="...">
                        <div class="caption">
                            <h3>{{ $product->type }}</h3>
                            <p>{{ $product->description }}</p>
                            <h4> Size:{{ $product->size }}</h4>
                            <div>
                                <div class="price">£{{$product->price}}</div>
                                <a href="{{ route('product.addToCart', ['id' => $product->id]) }}" class="btn btn-primary" role="button">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

        </div>
    @endforeach
    <button type="button" class="btn btn-primary btn-lg btn-block">
        <a href="{{ 'shop.create-your-own'}}">
           Create your own </button></a>
@endsection