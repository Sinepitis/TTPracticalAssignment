@extends('layout.app')

@section('content')
<h1>Admin</h1>
 <form action="/admin">
  <input type="text" name="like" value=""><br>
  <input type="submit" value="Search">
</form>
	@if(count($users) > 0 )
<table class = "table">
	<thead>
		<tr>
			<th class = "tableFirstRow">Name</th>
			<th class = "tableFirstRow">Email</th>
			<th class = "tableFirstRow">Role</th>
		</tr>
	</thead>
	<tbody>
		@foreach($users as $user)
		<tr>
			<form action="{{route('admin.assign')}}" method="post" >
				{{ csrf_field() }}
				<td class = "fontSmall">{{$user->name}}</td>
				<td class="fontSmall"><input type ="hidden" name="email" value="{{$user->email}}"> {{$user->email}}</td>

				<td><select name="role">

						@for ($x = 0; $x <= 4; $x++)
							@if($user->role != $x)
								<option value="{{$x}}">{{$x}}</option>
							@else
								<option selected="selected" value="{{$user->role}}">{{$user->role}}</option>
							@endif
						@endfor
					</select>
				</td>
				<td><button type="submit">Assign Role</button></td>
			</form>
		</tr>

		@endforeach
	@endif
	</tbody>
<table>
@endsection
