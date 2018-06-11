<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lineup;
use App\Team;

class LineupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $like = $request['like'];

      $thisUser = $request->user();
      $teams=Team::all();
      $lineups=Lineup::all();

      foreach($lineups as $key=> $lineup)
      {
        $lineup->teamName = Team::where('team_id',$lineup->team_id)->first()->team_name;
        if ($like!==null && (stripos($lineup['name'], $like) === FALSE))
        {
          unset($lineups[$key]);
        }
      }
        return view('lineups',['lineups'=>$lineups, 'teams'=>$teams]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $leagues = new Lineup();
        $leagues->team_id = $request['addTID'];
        $leagues->name = $request['addName'];
        $leagues->save(['timestamps' => false]);
        return redirect()->back();
    }
    public function delete(Request $request)
    {
        (Lineup::where('lineup_id',$request['lineupId'])->first())->delete();
        return redirect()->back();
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
