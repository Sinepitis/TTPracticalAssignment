@extends('layout.app')

@section('content')
<h1>Players</h1>
<form action="/players">
 <input type="text" name="like" value="{{ app('request')->input('like') }}"><br>
 <input type="submit" value="Search">
</form>

  	<table border="1">
      <thead>
    		<tr>
          @if(Auth::check() && Auth::user()->hasRole('2'))
          <td> Team ID </td>
          <td> Lineup ID </td>
          @endif
    			<td> Name </td>
    			<td> Surname </td>
          <td> Position </td>
    			<td> Role </td>
          <td> Started Playing </td>
    		</tr>
      </thead>
      <tbody>
        @if(Auth::check() && Auth::user()->hasRole('2'))
        <form action="/players/Add" id ="addForm">
              <tr>
                <td>
                  <select form ="addForm" name="addTID">
                    @foreach($teams as $team)
                        <option value="{{$team->team_id}}">{{$team->name}}</option>
                    @endforeach
                  </select>
                </td>
                <td>
                  <select form ="addForm" name="addLID">
                    @foreach($lineups as $lineup)
                        <option value="{{$lineup->lineup_id}}">{{$lineup->name}}</option>
                    @endforeach
                  </select>
                </td>
                <td>
                    <input type="text" name="addName" value="" form="addForm">
                </td>
                <td>
                    <input type="text" name="addSurn" value="" form="addForm">
                </td>
                <td>
                    <input type="text"  name="addPos" value="" form="addForm">
                </td>
                <td>
                    <input type="text" name="addRole" value="" form="addForm">
                </td>
                <td>
                    <input type="text" name="addJoin" value="" form="addForm">
                </td>
                <td>
                    <input type="submit" value="Add" form="addForm">
                </td>
              </tr>
          </form>
          @endif
    	@foreach ($players as $player)
    		<tr>
          <td> {{$player->name}}</td>
          <td> {{$player->surname}}</td>
          <td> {{$player->position}}</td>
          <td> {{$player->role}}</td>
          <td> {{$player->first_joined_team}}</td>
    		</tr>
    	@endforeach
      </tbody>
  	</table>
@endsection
