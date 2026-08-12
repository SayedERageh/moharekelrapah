@extends('layouts.app')

@section('title', 'محرك الأرباح | أفضل المنتجات والعروض')

@section('content')

<main class="main">

    {{-- Hero --}}
    @include('components.carouselHero')


    {{-- الأقسام + المنتجات --}}
    @include('components.products')


    {{-- الخدمات --}}
    @include('components.Featured')


    {{-- مميزات الموقع --}}
    @include('components.features')


    {{-- Call To Action --}}
    @include('components.call')


    {{-- الخدمات الإضافية --}}
    @include('components.onfocus')

    @include('components.services')


    {{-- آراء العملاء --}}
    @include('components.testimonials')


    {{-- الأسئلة الشائعة --}}
    @include('components.faq')


    {{-- المتاجر / العملاء --}}
    @include('components.clients')

</main>

@endsection