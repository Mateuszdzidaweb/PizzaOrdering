@extends('layouts.master')

@section('title')
    Pizza Ordering
@endsection

@section('content')


    <h1 class="index-heading">Welcome {{ Auth:: user()->username }} </h1>

@endsection

