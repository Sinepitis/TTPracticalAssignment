@extends('layout.app')

@section('content')
<h1>Games</h1>
<form action="/games">
 <input type="text" name="like" value="{{ app('request')->input('like') }}"><br>
 <input type="submit" value="Search">
</form>
  	<table border="1">
      <thead>
    		<tr>
    			<td> Team 1 </td>
    			<td> Team 2 </td>
    			<td> Tournament </td>
          <td> Score T1 </td>
          <td> Score T2 </td>
          <td> Description </td>
          <td> Date </td>
          @if(Auth::check() && Auth::user()->hasRole('2'))
          <td>Add</td>
          <td>Delete</td>
          @endif
    		</tr>
      </thead>
      <tbody>
        @if(Auth::check() && Auth::user()->hasRole('2'))
        <form action="/games/Add" id ="addForm">
              <tr>
                <td>
                  <select form ="addForm" name="addTeamID1">
                    @foreach($teams as $team)
                        <option value="{{$team->team_id}}">{{$team->team_name}}</option>
                    @endforeach
                  </select>
                </td>
                <td>
                  <select form ="addForm" name="addTeamID2">
                    @foreach($teams as $team)
                        <option value="{{$team->team_id}}">{{$team->team_name}}</option>
                    @endforeach
                  </select>
                </td>
                <td>
                  <select form ="addForm" name="addTournID">
                    @foreach($tournaments as $tournament)
                        <option value="{{$tournament->tournament_id}}">{{$tournament->name}}</option>
                    @endforeach
                  </select>
                </td>
                <td>
                    <input type="number" name="addSCT1" value="" form="addForm">
                </td>
                <td>
                    <input type="number"  name="addSCT2" value="" form="addForm">
                </td>
                <td>
                    <input type="text" name="addDesc" value="" form="addForm">
                </td>
                <td>
                    <input type="date" name="addDate" value="" form="addForm">
                </td>
                <td>
                    <input type="submit" value="Add" form="addForm">
                </td>
                <td> </td>
              </tr>
          </form>
          @endif
    	@foreach ($games as $game)
    		<tr>
            <form action="/games/Delete" method="post" >
              {{ csrf_field() }}
              <input type ="hidden" name="gameId" value="{{$game->game_id}}">
              <td> {{$game->team1Name}}</td>
              <td> {{$game->team2Name}}</td>
              <td> {{$game->tournamentName}}</td>
              <td> {{$game->Team1_score}}</td>
              <td> {{$game->Team2_score}}</td>
              <td> {{$game->description}}</td>
              <td> {{$game->date_of_game}}</td>
              @if(Auth::check() && Auth::user()->hasRole('2'))
              <td> </td>
              <td><input type="submit" value="Delete"></td>
              @endif
          </form>
    		</tr>
    	@endforeach
      </tbody>
  	</table>
@endsection
