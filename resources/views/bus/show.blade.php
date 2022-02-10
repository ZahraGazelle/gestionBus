@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="col-2 p-2">
                    <a class="btn btn-primary" href="{{ route('bus') }}">Liste Bus</a>
                </div>
                <div class="card">
                    <div class="card-header">{{$title}}</div>
                    <div class="card-body">
                    <h5 class="card-title">Client :  {{$bus->user->name}}</h5>
                    <p class="card-text"> Numero de bus est :  {{$bus->numBus}}</p>
                   
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
