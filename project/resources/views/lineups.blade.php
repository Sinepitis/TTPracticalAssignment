@extends('layout.app')

@section('content')
<h1>Lineups</h1>
<form action="/lineups">
 <input type="text" name="like" value="{{ app('request')->input('like') }}"><br>
 <input type="submit" value="Search">
</form>
  	<table border="1">
      <thead>
    		<tr>
          <td> Team </td>
    			<td> Name </td>
          @if(Auth::check() && Auth::user()->hasRole('2'))
          <td> Action </td>
          @endif
    		</tr>
      </thead>
      <tbody>
        @if(Auth::check() && Auth::user()->hasRole('2'))
        <form action="/lineups/Add" id ="addForm">
              <tr>
                <td>
                  <select form ="addForm" name="addTID">
                    @foreach($teams as $team)
                        <option value="{{$team->team_id}}">{{$team->team_name}}</option>
                    @endforeach
                  </select>
                </td>
                <td>
                    <input type="text" name="addName" value="" form="addForm">
                </td>
                <td>
                    <input type="submit" value="Add" form="addForm">
                </td>
              </tr>
          </form>
          @endif
    	@foreach ($lineups as $lineup)
    		<tr>
          <form action="/lineups/Delete" method="post" >
            {{ csrf_field() }}
            <input type ="hidden" name="lineupId" value="{{$lineup->lineup_id}}">
            <td> {{$lineup->teamName}}</td>
            <td> {{$lineup->name}}</td>
            @if(Auth::check() && Auth::user()->hasRole('2'))
            <td><input type="submit" value="Delete"></td>
            @endif
    		</tr>
    	@endforeach
      </tbody>
  	</table>
@endsection
