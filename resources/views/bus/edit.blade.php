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
                        <form method="post" action="{{ route('bus.update',['id' => $bus->id ]) }}">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="">numBus</label>
                                <input type="text" class="form-control" name="numbus" value="{{$bus->numBus}}">
                            </div>
                            <div class="form-group">
                                <label for="">NumImmat</label>
                                <input type="text" class="form-control" name="numimmat" value="{{$bus->numero}}">
                            </div>
                            <div class="form-group">
                                <label for="">NumCartegrises</label>
                                <input type="text" class="form-control" name="numcartegrises" value="{{$bus->date}}">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Save</button>
                                <button class="btn btn-danger" type="reset">Annuler</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
