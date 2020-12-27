@extends('app')

@section('title', 'Services')

@section('content')
    <h1>Welcome to Laravel 6 From Services</h1>
    <ul>
        @forelse ($services as $service)
            <li>{{ $service }}</li>
        @empty
            <li>No Services Available.</li>
        @endforelse
    </ul>
@endsection
