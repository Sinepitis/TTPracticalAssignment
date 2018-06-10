@extends('layout.app')

@section('content')
<h1>Games</h1>
<form action="/games">
 <input type="text" name="like" value="{{ app('request')->input('like') }}"><br>
 <input type="submit" value="Search">
</form>
  @if (count($games)==0)
	 <p> There is no record in the database!</p>
  @else
  	<table border="1">
      <thead>
    		<tr>
    			<td> Team 1 </td>
    			<td> Team 2 </td>
    			<td> Tournament </td>
          <!--<td> League </td>-->
          <td> Score T1 </td>
          <td> Score T2 </td>
          <td> Game of Tournament </td>
          <td> Happened </td>

    		</tr>
      </thead>
      <tbody>
    	@foreach ($games as $game)
    		<tr>
          <td> {{$game->team_id_1}}</td>
          <td> {{$game->team_id_2}}</td>
          <td> {{$game->tournament_id}}</td>
          <!--<td> {{$game->tournament_id->league_id->name}}</td>-->
          <td> {{$game->Team1_score}}</td>
          <td> {{$game->Team2_score}}</td>
          <td> {{$game->position}}</td>
          <td> {{$game->date_of_game}}</td>
    		</tr>
    	@endforeach
      </tbody>
  	</table>
  @endif
@endsection
