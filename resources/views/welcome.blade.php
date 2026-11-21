@extends('layouts.app')

@section('title', 'Главная')

@section('content')
    <div class="container page">
        <h1>Добро пожаловать!</h1>
        <p>На сайте есть главная страница, страница «О нас» и страница с контактами.</p>

        <a class="button" href="{{ route('about') }}">Перейти на страницу «О нас»</a>
    </div>
@endsection
