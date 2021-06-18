@extends('layouts.labs')

@section('content')
    @include('partials.home.preloader')
    @include('partials.home.header')
    @include('partials.home.intro')
    @include('partials.home.about')
    @include('partials.home.testimonial')
    @include('partials.home.service')
    @include('partials.home.team')
    @include('partials.home.promotion')
    @include('partials.contact')
@endsection