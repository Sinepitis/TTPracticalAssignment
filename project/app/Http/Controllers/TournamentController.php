<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tournament;
use App\League;

class TournamentController extends Controller
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
      $tournaments=Tournament::all();
      $leagues = League::all();
      foreach($tournaments as $key=> $tournament)
      {
        if ($like!==null && (stripos($tournament['name'], $like) === FALSE))
        {
          unset($tournaments[$key]);
        }
      }
      return view('tournaments',['tournaments'=>$tournaments , 'leagues'=>$leagues]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      $tournaments = new Tournament();
      $tournaments->league_id = $request['addID'];
      $tournaments->name = $request['addName'];
      $tournaments->description = $request['addDesc'];
      $tournaments->created_on = $request['addDate'];
      $tournaments->save(['timestamps' => false]);
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
