@extends('layout.app')

@section('content')
<h1>Players</h1>
<form action="/players">
 <input type="text" name="like" value="{{ app('request')->input('like') }}"><br>
 <input type="submit" value="Search">
</form>
  @if (count($players)==0)
	 <p> There is no record in the database!</p>
  @else
  	<table border="1">
      <thead>
    		<tr>
    			<td> Name </td>
    			<td> Surname </td>
          <td> Position </td>
    			<td> Role </td>
          <td> Started Playing </td>
    		</tr>
      </thead>
      <tbody>
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
  @endif
@endsection
