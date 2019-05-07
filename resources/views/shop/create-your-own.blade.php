@extends('layouts.master')

@section('title')
    Create Your Own Pizza
@endsection

@section('content')
    {{--<form action="{{route('createOwn.view')}}" method="get">--}}

    {{--</div>--}}
    <form action="{{route('createOwn.view')}}" method="post">

            <div class="radio">
                <label><input type="radio" name="base" id="base" value="8" > Small</label>

                <label> <input type="radio" name="base" id="base" value="9"> Medium</label>

                <label><input type="radio" name="base" id="base" value="11"> Large</label>
            </div>
        {{csrf_field()}}
    <div class="toppings-container">
        <h3>Small</h3>


        @foreach($small_toppings as $small_topping)
         <div class="radio">
            <label>
                <input type="checkbox" id="small_topping_price" name="small_topping_price[]" value="{{ $small_topping->name}}"> {{$small_topping->name}}
            </label>
        </div>

        @endforeach
    </div>


    <div class="toppings-container">
        <h3>Medium</h3>
        @foreach($medium_toppings as $medium_topping)
            <div class="radio">
                <label>
                    <input type="checkbox" value="medium_topping"> {{$medium_topping->name}}
                </label>
            </div>
        @endforeach
    </div>

    <div class="toppings-container">
        <h3>Large</h3>
        @foreach($large_toppings as $large_topping)
            <div class="radio">
                <label>
                    <input type="checkbox" value="medium_topping"> {{$large_topping->name}}
                </label>
            </div>
        @endforeach
    </div>
    <br>
    <button type="submit" name="calculate_price" value="calculate_price" class="btn btn-primary btn-sm">
        Submit order
    </button>
    </form>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

@endsection