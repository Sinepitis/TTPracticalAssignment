<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\League;

class LeagueController extends Controller
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
      $leagues=League::all();

      foreach($leagues as $key=> $league)
      {
        if ($like!==null && (stripos($league['name'], $like) === FALSE))
        {
          unset($leagues[$key]);
        }
      }
        return view('leagues',['leagues'=>$leagues]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $leagues = new League();
        $leagues->name = $request['addName'];
        $leagues->description = $request['addDesc'];
        $leagues->created_on = $request['addDate'];
        $leagues->save(['timestamps' => false]);
        return redirect()->back();
    }

    public function delete(Request $request)
    {
        (League::where('league_id',$request['leagueId'])->first())->delete();
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

    }
}
