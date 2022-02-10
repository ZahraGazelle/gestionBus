@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="col-2 p-2">
                    <a class="btn btn-primary" href="{{ route('ticket') }}">Liste Ticket</a>
                </div>
                <div class="card">
                    <div class="card-header">{{$title}}</div>
                    <div class="card-body">
                        <form method="post" action="{{ route('ticket.update',['id' => $ticket->id ]) }}">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="">Numero</label>
                                <input type="text" class="form-control" name="numero" value="{{$ticket->numero}}">
                            </div>
                            <div class="form-group">
                                <label for="">telephone</label>
                                <input type="date" class="form-control" name="date" value="{{$ticket->date}}">
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
