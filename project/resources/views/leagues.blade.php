@extends('layout.app')

@section('content')

<h1>Leagues</h1>
<form action="/leagues">
 <input type="text" name="like" value="{{ app('request')->input('like') }}"><br>
 <input type="submit" value="Search">
</form>
  @if (count($leagues)==0)
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
    	@foreach ($leagues as $league)
    		<tr>
          <td>{{$league->name}}</td>
          <td> {{$league->description}}</td>
          <td> {{$league->created_on}}</td>
    		</tr>
    	@endforeach
      </tbody>
  	</table>
  @endif
@endsection
