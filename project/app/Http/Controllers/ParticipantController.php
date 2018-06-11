<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Participant;
use App\Team;
use App\Lineup;

class ParticipantController extends Controller
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
      $participants=Participant::all();
      $teams=Team::all();
      $lineups=Lineup::all();
      foreach($participants as $key=> $participant)
      {
        if ($like!==null && (stripos($participant['name'], $like) === FALSE))
        {
          unset($participants[$key]);
        }
      }

      return view('players',['players'=>$participants, 'teams'=>$teams, 'lineups'=>$lineups]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $participants = new Participant();
        $participants->team_id = $request['addTID'];
        $participants->lineup_id = $request['addLID'];
        $participants->name = $request['addName'];
        $participants->surname = $request['addSurn'];
        $participants->position = $request['addPos'];
        $participants->role = $request['addRole'];
        $participants->first_joined_team = $request['addDate'];
        $participants->save(['timestamps' => false]);
        return redirect()->back();
    }
    public function delete(Request $request)
    {
        (Participant::where('participant_id',$request['ParticipantId'])->first())->delete();
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
