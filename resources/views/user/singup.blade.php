@extends('layouts.master')

@section('title')
    Sing up
@endsection

@section('content')

<div class="row">
    <div class="col-md-4 col-md-offset-4" id="formDiv" >
        <h1>Sing Up</h1>
        @if(count($errors) > 0)
            <div class="alert alert-danger">
                @foreach($errors-> all() as $error)
                <p>{{ $error }}</p>
                 @endforeach
            </div>
        @endif
        <form action="{{ route('user.singup') }}" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="text" id="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control">
            </div>
            <div class="form-group">
                <label for="password_confirm">Confirm Password</label>
                <input type="password" id="password_confirm" name="password_confirm" class="form-control">
            </div>
            {{--<div class="form-group">--}}
                {{--<div class="col-md-4"></div>--}}
                {{--<div class="form-group col-md-4">--}}
                    {{--<label for="ReCaptcha">Recaptcha:</label>--}}
                    {{--{!! NoCaptcha::renderJs() !!}--}}
                    {{--{!! NoCaptcha::display() !!}--}}
                {{--</div>--}}
            {{--</div>--}}
            <button type="submit" class="btn btn-primary" id="btnSingUp">Sing Up</button>
            {{--Cross-site request protection--}}
            {{--https://laravel.com/docs/5.8/csrf--}}
            {{ csrf_field() }}
        </form>
    </div>
</div>

@endsection