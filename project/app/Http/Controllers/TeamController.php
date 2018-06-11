<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\League;

class TeamController extends Controller
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
      $leagues=League::all();
      foreach($teams as $key=> $team)
      {
        if ($like!==null && (stripos($team['name'], $like) === FALSE))
        {
          unset($teams[$key]);
        }
      }

      return view('teams',['teams'=>$teams, 'leagues'=>$leagues]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      $teams = new Team();
      $teams->league_id = $request['addID'];
      $teams->name = $request['addName'];
      $teams->team_description = $request['addDesc'];
      $teams->created_on = $request['addDate'];
      $teams->save(['timestamps' => false]);
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
