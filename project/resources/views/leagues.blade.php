@extends('layout.app')

@section('content')

<h1>Leagues</h1>
<form action="/leagues">
 <input type="text" name="like" value="{{ app('request')->input('like') }}"><br>
 <input type="submit" value="Search">
</form>
  	<table border="1">
      <thead>
    		<tr>
    			<td> Name </td>
    			<td> Description </td>
    			<td> Founded </td>
          @if(Auth::check() && Auth::user()->hasRole('2'))
          <td> Action </td>
          @endif
    		</tr>
      </thead>
      <tbody>
        @if(Auth::check() && Auth::user()->hasRole('2'))
        <form action="/leagues/Add" id ="addForm">
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
                    <input type="submit" value="Add" form="addForm">
                </td>
              </tr>
          </form>
          @endif
    	@foreach ($leagues as $league)
      <tr>
        <form action="/leagues/Delete" method="post">
      		{{ csrf_field() }}
            <input type ="hidden" name="leagueId" value="{{$league->league_id}}">
            <td id ="{{$league->league_id}}"> {{$league->name}}</td>
            <td> {{$league->description}}</td>
            <td> {{$league->created_on}}</td>
            @if(Auth::check() && Auth::user()->hasRole('2'))
            <td>
                <input type="submit" value="Delete">
            </td>
            @endif
        </form>
      </tr>
    	@endforeach
      </tbody>
  	</table>
@endsection
