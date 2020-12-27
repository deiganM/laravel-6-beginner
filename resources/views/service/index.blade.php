@extends('app')

@section('title', 'Services')

@section('content')
    <form action="/service" method="post">
        <input type="text" name="name" autocomplete="off">
        @csrf
        <button>Add Service</button>
    </form>
    <p style="color: red;">@error('name') {{ $message }} @enderror</p>
    <h1>Welcome to Laravel 6 From Services</h1>
    <ul>
        @forelse ($services as $service)
            <li>{{ $service->name }}</li>
        @empty
            <li>No Services Available.</li>
        @endforelse
    </ul>
@endsection
