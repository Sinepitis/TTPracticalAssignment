@extends('layout.app')

@section('content')
<h1>Teams</h1>
<form action="/teams">
 <input type="text" name="like" value="{{ app('request')->input('like') }}"><br>
 <input type="submit" value="Search">
</form>
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
        @if(Auth::check() && Auth::user()->hasRole('2'))
        <form action="/teams/Add" id ="addForm">
              <tr>
                <td>
                    <input type="text" name="addName" value="" form="addForm">
                </td>
                <td>
                    <input type="text"  name="addDesc" value="" form="addForm">
                </td>
                <td>
                    <input type="text" name="addDate" value="" form="addForm">
                </td>
                <td>
                  <select form ="addForm" name="addID">
                    @foreach($leagues as $league)
                        <option value="{{$league->league_id}}">{{$league->name}}</option>
                    @endforeach
                  </select>
                </td>
                <td>
                    <input type="submit" value="Add" form="addForm">
                </td>
              </tr>
          </form>
          @endif
    	@foreach ($teams as $team)
    		<tr>
          <form action="/teams/Delete" method="post" >
            {{ csrf_field() }}
            <input type ="hidden" name="teamId" value="{{$team->team_id}}">
            <td> {{$team->team_name}}</td>
            <td> {{$team->team_description}}</td>
            <td> {{$team->created_on}}</td>
            <td> {{$team->league_id}}</td>
            @if(Auth::check() && Auth::user()->hasRole('2'))
            <td><input type="submit" value="Delete"></td>
            @endif
    		</tr>
    	@endforeach
      </tbody>
  	</table>
@endsection
