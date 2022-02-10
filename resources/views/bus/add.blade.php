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
                        <form method="post" action="{{ route('bus.store') }}">
                            @csrf
                             <div class="form-group">
                                 <label for="">numBus</label>
                                 <input type="number" class="form-control" name="numBus">
                             </div>
                            <div class="form-group">
                                <label for="">NumImmat</label>
                                <input type="number" class="form-control" name="NumImmat">
                            </div>
                            <div class="form-group">
                                <label for="">NumCartegrises</label>
                                <input type="number" class="form-control" name="NumCartegrises">
                            </div>
                            <div class="form-group">
                                <label for="">tickets</label>
                                <select class="custom-select" id="inputGroupSelect01" name="tickets_id">
                                    @foreach($ticket as $item)
                                        <option value="{{$item->id}}">{{$item->numero}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">user_id</label>
                                <select class="custom-select" id="inputGroupSelect01" name="user_id">
                                    @foreach($user as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
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
