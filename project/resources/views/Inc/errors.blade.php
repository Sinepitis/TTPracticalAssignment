<html>
<head>
<style>
</style>
</head>
<body>
@if(count($errors)>0)

	@foreach($errors->all() as $error)
		{{$error}}<br/>
	@endforeach

@endif
</body>
</html>
