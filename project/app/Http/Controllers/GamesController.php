<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Games;
use App\Team;
use App\League;
use App\Tournament;

class GamesController extends Controller
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
      $games=Games::all();
      $teams=Team::all();
      $tournaments=Tournament::all();

      foreach ($games as $key => $game)
      {
        if ($like!==null && (stripos($game['name'], $like) === FALSE))
        {
          unset($games[$key]);
        }
      }

        return view('games',['games'=>$games, 'tournaments'=>$tournaments, 'teams'=>$teams]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $games = new Games();
        $games->team_id_1 = $request['addTeamID1'];
        $games->team_id_2 = $request['addTeamID2'];
        $games->tournament_id = $request['addTournID'];
        $games->Team1_score = $request['addSCT1'];
        $games->Team2_score = $request['addSCT2'];
        $games->description = $request['addDesc'];
        $games->date_of_game = $request['addDate'];
        $games->save(['timestamps' => false]);
        return redirect()->back();
    }
    public function delete(Request $request)
    {
      //  $game =
        (Games::where('game_id',$request['gameId'])->first())->delete();
        //$game->delete();
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
