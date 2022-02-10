<?php

namespace App\Http\Controllers;

use App\Bus;
use App\Client;
use App\Guichet;
use App\Ticket;
use App\User;
use Illuminate\Http\Request;

class busContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $bus = Bus::all();
        $title = "Liste des Bus";
        return view('bus.index',compact('title','bus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $title = "Ajouter un ticket";
        $ticket= Ticket::all();
        $user = User::all();
        return view('bus.add',compact('ticket','title','user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ticket = Ticket::all();
        $user = User::all();
        Bus::create($request->all());
        $title = "Ajouter un Bus";
        return view('bus.add',compact('ticket','title','user'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Bus $id)
    {
       
        $bus = $id;
        
        $title = "Details de bus";
        return view('bus.show',compact('title','bus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param   bus $bus
     * @return \Illuminate\Http\Response
     */
    public function edit(bus $bus)
    {
        //
        $title = "Modifie le bus";
        return view('bus.edit',compact('title','bus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  bus  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(bus $id)
    {
        //
        $id->delete();
        return $this->index();
    }
}
