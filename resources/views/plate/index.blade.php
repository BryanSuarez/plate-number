@extends('template')

@section('content')
<h3 class="page-header text-center">Pico y Placa</h3>
    <div class="panel panel-primary">
        <div class="panel-heading">Check if your car can move at Quito City!!!</div>
        <div class="panel-body">
            @include('partials.errors')
            @include('partials.form')
        </div>
        <div class="panel-footer">
            <p class="text-center">
                *
                If your vehicle belongs to the government, your car serves as a taxi or suffers a disability,
                the rules do not apply to you
            </p>
        </div>
    </div>
@stop