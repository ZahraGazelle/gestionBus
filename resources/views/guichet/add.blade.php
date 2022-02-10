@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="col-2 p-2">
                    <a class="btn btn-primary" href="{{ route('guichet') }}">Liste Guichet</a>
                </div>
                <div class="card">
                    <div class="card-header">{{$title}}</div>
                    <div class="card-body">
                        <form method="post" action="{{ route('guichet.store') }}">
                            @csrf
                             <div class="form-group">
                                 <label for="">Numero</label>
                                 <input type="text" class="form-control" name="numero">
                             </div>
                            <div class="form-group">
                                <label for="">clients</label>
                                <select class="custom-select" id="inputGroupSelect01" name="clients_id">
                                    @foreach($client as $item)
                                        <option value="{{$item->id}}">{{$item->nom}}</option>
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
