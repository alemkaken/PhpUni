@extends('layouts.app')

@section('title', 'Welcome Page')

@section('content')

    <h2>Welcome </h2>

    {{-- Blade Directive 1 --}}
    @if(true)
        <p>This page uses Blade layout inheritance.</p>
    @endif

    {{-- Blade Directive 2 --}}
    @php
        $technologies = ['PHP', 'Laravel', 'Blade', 'MVC'];
    @endphp

    <h3>Technologies Used:</h3>
    <ul>
        @foreach($technologies as $tech)
            <li>{{ $tech }}</li>
        @endforeach
    </ul>

    {{-- Blade Directive 3 --}}
    @isset($technologies)
        <p>Total Technologies: {{ count($technologies) }}</p>
    @endisset

@endsection