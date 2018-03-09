@extends('layouts.dashboard')

@section('content')
    <p>Dash content</p>
    @foreach ($orders as $order)
        <div class="alert alert-dark" role="alert">

            <div class="row">
                <div class="col">
                    Status : {{ $order->status }}
                </div>
                <div class="col-6">
                    <div>
                        <div>{{ $order->title }}</div>
                        <div>{{ $order->recipient_name }}</div>
                    </div>
                </div>
                <div class="col">
                    {{ $order->date }}
                </div>
            </div>
        </div>
    @endforeach
@endsection