@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="col-2 p-2">
                    <a class="btn btn-primary" href="{{ route('guichet.add') }}">Ajouter ticket</a>
                </div>
                <div class="card">
                    <div class="card-header">{{$title}}</div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">numero</th>
                                <th scope="col">date</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                              @foreach($guichet as $item)
                                  <tr>
                                      <th scope="row">{{$item->id}}</th>
                                      <th scope="row">{{$item->numero}}</th>
                                      <th scope="row">{{$item->date}}</th>
                                      <td scope="col">
                                          <a class="btn btn-primary"  href="{{ route('ticket.edit', ['id' => $item->id ]) }}">Editer</a>
                                          <a onclick="return confirm('Voulez-vous Confirmer la Suppression ?')" class="btn btn-danger" href="{{ route('ticket.destroy',['id' => $item->id ]) }}">Supprime</a>
                                      </td>
                                  </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

