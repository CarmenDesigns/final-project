<?php

namespace App\Http\Controllers;

use App\Events;
use Illuminate\Http\Request;

class Eventscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Events::all();
        return view('events.index',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validated();
        $succeed = [true,$request['title']];

        $events = new Events();
        $events->title = $request['title'];
        $events->content = $request['content'];
        $events->save();
        return redirect()->action('EventsController@index')->with('status','Events aangemaakt');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function show(Events $events)
    {
        return view('events.show',compact('events'));  //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function edit(Events $events)
    {
        return view('events.update',compact('events')); //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Events $events)
    {
        //update
//        $events->title = $request['title'];
//        $events->content = $request['content'];
//        $events->save();
        Events::create($request->all());
        //redirect
        $events = Events::all();
        return view('events.index',compact('events'));
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function destroy(Events $events)
    {
        $events->delete();
        $events = Events::all();
        return view('events.index',compact('events'));
    }
}
