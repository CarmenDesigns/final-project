<?php

namespace App\Http\Controllers;

use App\Events;
use App\Job;
use Illuminate\Http\Request;

class Eventscontroller extends Controller
{

    public function index()
    {
        $events = Job::all();
        return view('jobs.index',compact('jobsj'));
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


    public function show(Events $events)
    {
        return view('jobs.show',compact('jobs'));  //
    }


    public function edit(Job $job)
    {
        return view('jobs.update',compact('jobs')); //
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
       Job::create($request->all());
        //redirect
        $events = Job::all();
        return view('jobs.index',compact('jobs'));
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
        return view('jobs.index',compact('jobs'));
    }
}
