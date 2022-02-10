<?php

namespace App\Http\Controllers;


use App\Ticket;
use Illuminate\Http\Request;

class ticketContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ticket = Ticket::all();
        $title = "Liste de ticket";
        return view('ticket.index',compact('title','ticket'));
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
        return view('ticket.add',compact('title'));
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
        $ticket = new Ticket();
        $ticket->numero = $request->numero;
        $ticket->date = $request->date;
        $ticket->save();
        $title = "Ajouter un ticket";
        return view('ticket.add',compact('title'));
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
     * @param  ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(ticket $ticket)
    {

        $title = "Modifie le ticket";
        return view('ticket.edit',compact('title','ticket'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Ticket $ticket)
    {
        $ticket->numero= $request->numero;
        $ticket->date = $request->date;
        $ticket->save();
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Ticket  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket $id)
    {
        $id->delete();
        return $this->index();
    }
}
