@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Bienvenido a nuestra juguetería') }}</div>

                <div class="card-body d-flex justify-content-center">
                    <img src="{{ asset ('/img/logo.png') }}" class="w-50 ">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
