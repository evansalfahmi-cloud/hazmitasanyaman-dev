@extends('layouts.app')

@section('title', 'Beranda')

@section('content')

    {{-- Hero Section --}}
    @include('frontend.home.sections.hero')

    {{-- Categories --}}
    @include('frontend.home.sections.categories')

    {{-- Featured Products --}}
    @include('frontend.home.sections.featured-products')

@endsection