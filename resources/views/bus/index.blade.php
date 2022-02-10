@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="col-2 p-2">
                    <a class="btn btn-primary" href="{{ route('bus.add') }}">Ajouter Bus</a>
                </div>
                <div class="card">
                    <div class="card-header">{{$title}}</div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">numBus</th>
                                <th scope="col">NumImmat</th>
                                <th scope="col">NumCartegrises</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                              @foreach($bus as $item)
                                  <tr>
                                      <th scope="row">{{$item->id}}</th>
                                      <th scope="row">{{$item->numBus}}</th>
                                      <th scope="row">{{$item->NumImmat}}</th>
                                      <th scope="row">{{$item->NumCartegrises}}</th>
                                      <td scope="col">
                                          <a class="btn btn-warning"  href="{{ route('bus.show', ['id' => $item->id ]) }}">voir</a>
                                          <a class="btn btn-primary"  href="{{ route('bus.edit', ['id' => $item->id ]) }}">Editer</a>
                                          <a onclick="return confirm('Voulez-vous Confirmer la Suppression ?')" class="btn btn-danger" href="{{ route('bus.destroy',['id' => $item->id ]) }}">Supprime</a>
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

