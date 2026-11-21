@extends('layouts.app')

@section('title', 'Контакты')

@section('content')
    <div class="container page">
        <h1>Контакты</h1>
        <p>Мои контактные данные:</p>

        <div class="contacts">
            @foreach ($contacts as $contact)
                <div class="contact">
                    <h2>{{ $contact['title'] }}</h2>

                    @if (!empty($contact['href']))
                        <a href="{{ $contact['href'] }}">{{ $contact['value'] }}</a>
                    @else
                        <p>{{ $contact['value'] }}</p>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
@endsection
