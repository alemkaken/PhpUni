@extends('layouts.app')

@section('title', 'Index Page')

@section('content')

    <h2>Index Page</h2>

    <p>This data comes from the Controller:</p>

    <ul>
        <li><strong>Name:</strong> {{ $name ?? 'Alem Kaken' }}</li>
        <li><strong>Course:</strong> {{ $course ?? 'Laravel' }}</li>
        <li><strong>Message:</strong> {{ $message ?? 'Hello from Controller' }}</li>
    </ul>

@endsection