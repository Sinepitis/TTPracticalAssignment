@extends('layout.app')

@section('content')
<h1>Tournaments</h1>
<form action="/tournaments">
 <input type="text" name="like" value=""><br>
 <input type="submit" value="Search">
</form>
  @if (count($tournaments)==0)
	 <p color='red'> There is no record in the database!</p>
  @else
  	<table border="1">
      <thead>
    		<tr>
    			<td> Name </td>
    			<td> Description </td>
    			<td> Founded </td>
    		</tr>
      </thead>
      <tbody>
    	@foreach ($tournaments as $tournament)
    		<tr>
          <td>{{$tournament->name}}</td>
          <td> {{$tournament->description}}</td>
          <td> {{$tournament->created_on}}</td>
    		</tr>
    	@endforeach
      </tbody>
  	</table>
  @endif
@endsection
