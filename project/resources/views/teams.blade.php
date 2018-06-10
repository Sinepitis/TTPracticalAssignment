@extends('layout.app')

@section('content')
<h1>Teams</h1>
<form action="/teams">
 <input type="text" name="like" value="{{ app('request')->input('like') }}"><br>
 <input type="submit" value="Search">
</form>
  @if (count($teams)==0)
	 <p color='red'> There is no record in the database!</p>
  @else
  	<table border="1">
      <thead>
    		<tr>
    			<td> Name </td>
    			<td> Description </td>
    			<td> Founded </td>
          <td> League </td>
    		</tr>
      </thead>
      <tbody>
    	@foreach ($teams as $team)
    		<tr>
          <td>{{$team->name}}</td>
          <td> {{$team->team_description}}</td>
          <td> {{$team->created_on}}</td>
          <td> {{$team->league_id}}</td>
    		</tr>
    	@endforeach
      </tbody>
  	</table>
  @endif
@endsection
