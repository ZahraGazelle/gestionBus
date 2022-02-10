<?php

namespace App\Http\Controllers;

use App\Client;
use App\Guichet;
use App\User;
use Illuminate\Http\Request;

class guichetContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $guichet = Guichet::all();
        $title = "Liste de ticket";
        return view('guichet.index',compact('title','guichet'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Ajouter un guichet";
        $client = Client::all();
        $user = User::all();
        return view('guichet.add',compact('client','title','user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        /*$guichet = new Guichet();
        $guichet->numero = $request->numero;
        $guichet->client_id = $request->client_id;
        $guichet->user_id = $request->user_id;
        dd($guichet);
        die();*/
        $client = Client::all();
        $user = User::all();
        Guichet::create($request->all());
        $title = "Ajouter un guichet";
        return view('guichet.add',compact('client','title','user'));
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
     * @param   guichet $guichet
     * @return \Illuminate\Http\Response
     */
    public function edit(guichet $guichet)
    {
        //
        $title = "Modifie le guichet";
        return view('guichet.edit',compact('title','guichet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Guichet  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Guichet  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guichet $id)
    {
        //
        $id->delete();
        return $this->index();
    }
}
