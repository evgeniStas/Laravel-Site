@extends('layouts.dashboard')

@section('content')
    <p>Add</p>
    <nav class="nav nav-pills nav-fill">
        <a class="nav-item nav-link active" href="#">First step</a>
        <a class="nav-item nav-link" href="#">Second step</a>
        <a class="nav-item nav-link" href="#">Finish step</a>
    </nav>
    <div class="alert alert-light" role="alert">
        <h3>Choose client</h3>
        <select class="custom-select">
            @foreach ($clients as $client)
                <option value="{{ $client->id }}">{{ $client->first_name }} {{ $client->last_name }}</option>
            @endforeach
        </select>
        <div>
            <button class="btn btn-link">Add new client</button>
        </div>
        <h3>Choose product</h3>
    </div>
@endsection