<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class clientContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = Client::all();
        $title = "Liste de client";
        return view('client.index',compact('title','client'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Ajouter de client";
        return view('client.add',compact('title'));
    }

    /**
     * Client::create($request->all());
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = new Client();
        $client->nom = $request->nom;
        $client->prenom = $request->prenom;
        $client->tel = $request->tel;
        $client->save();
        $title = "Ajouter de client";
        return view('client.add',compact('title'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int    $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Client  $client)
    {
        $title = "Modifie le client";
        return view('client.edit',compact('title','client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Client  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Client $client)
    {
        $client->nom = $request->nom;
        $client->prenom = $request->prenom;
        $client->tel = $request->tel;
        $client->save();
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Client  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $id)
    {
        $id->delete();
        return $this->index();
    }
}
