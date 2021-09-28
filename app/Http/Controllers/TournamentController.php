<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use Illuminate\Http\Request;

class TournamentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tournaments = Tournament::all();
        return view('tournaments/index')
                ->with('tournaments', $tournaments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tournaments/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'date' => 'required|date_format:Y-m-d',
            'starttijd'=>'required|date_format:H:i'
        ]);
        
        $tournament = new Tournament();
        $tournament->name = $request->name;
        $tournament->date = $request->date;
        $tournament->starttijd = $request->starttijd;
        $tournament->save();
        
        return redirect()->route('tournaments.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tournament  $tournament
     * @return \Illuminate\Http\Response
     */
    public function edit(Tournament $tournament)
    {
        return view('tournaments/edit')
                ->with('tournament', $tournament);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tournament  $tournament
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tournament $tournament)
    {
        $request->validate([
            'name' => 'required',
            'date' => 'required|date_format:Y-m-d',
            'starttijd'=>'required|date_format:H:i'
        ]);
        
        $tournament->name = $request->name;
        $tournament->date = $request->date;
        $tournament->starttijd = $request->starttijd;
        $tournament->save();
        
        return redirect()->route('tournaments.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tournament  $tournament
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tournament $tournament)
    {
        //
    }
}
