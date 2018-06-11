@extends('layout.app')

@section('content')
<h1>Tournaments</h1>
<form action="/tournaments">
 <input type="text" name="like" value="{{ app('request')->input('like') }}"><br>
 <input type="submit" value="Search">
</form>


  	<table border="1">
      <thead>
    		<tr>
          @if(Auth::check() && Auth::user()->hasRole('2'))
          <td> league_id </td>
          @endif
    			<td> Name </td>
    			<td> Description </td>
    			<td> Founded </td>
    		</tr>
      </thead>
      <tbody>
        @if(Auth::check() && Auth::user()->hasRole('2'))
        <form action="/tournaments/Add" id ="addForm">
              <tr>
                <td>
                  <select form ="addForm" name="addID">
                    @foreach($leagues as $league)
                        <option value="{{$league->league_id}}">{{$league->name}}</option>
                    @endforeach
                  </select>
                </td>
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
    	@foreach ($tournaments as $tournament)
    		<tr>
          @if(Auth::check() && Auth::user()->hasRole('2'))
          <td> {{$tournament->league_id}} </td>
          @endif
          <td>{{$tournament->name}}</td>
          <td> {{$tournament->description}}</td>
          <td> {{$tournament->created_on}}</td>
    		</tr>
    	@endforeach
      </tbody>
  	</table>

@endsection
