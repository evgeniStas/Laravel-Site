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
    <div class="MenuButton">
        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#menuModal">+</button>
    </div>
    <div class="modal fade" id="menuModal" tabindex="-1" role="dialog" aria-labelledby="menuModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document"></div>
        <div class="NewUser">
            <a href="{{ route('admin.addClient') }}">
                <div class="popover fade show bs-popover-left" role="tooltip" x-placement="right" x-out-of-boundaries="" style="position: absolute;top: 0px;left: -165px;will-change: transform;width: 150px;"><h3 class="popover-header"></h3><div class="popover-body">New client</div></div>
                <button type="button" class="btn btn-primary">+</button>
            </a>
        </div>
        <div class="NewOrder">
            <a href="{{ route('admin.addOrder') }}">
                <div class="popover fade show bs-popover-left" role="tooltip" x-placement="right" x-out-of-boundaries="" style="position: absolute;top: 0px;left: -165px;will-change: transform;width: 150px;"><h3 class="popover-header"></h3><div class="popover-body">New order</div></div>
                <button type="button" class="btn btn-warning">+</button>
            </a>
        </div>
    </div>
@endsection