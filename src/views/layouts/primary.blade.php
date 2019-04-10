@extends('products::layouts.base')

@section('header')
    @include('products::parts.header')
@endsection

@section('content')
    @include($page)
@endsection

@section('footer')
    @include('products::parts.footer')
@endsection
