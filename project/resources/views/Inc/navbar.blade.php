<!DOCTYPE html>
<html>
<head>
<style>
.navBarUl{
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #334;
}
.right {
    float: right;
}
.left{
	float: left;
}
.invisible
{
  width:2%;
  height:2vh;
  float: right;
}
li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #42f4b3;
}
.table
{
	width:100vh;
	text-align: center;
	border: 3px solid #334;
}
.fontSmall
{
	font-size: 22px;
}
.table tr:nth-child(even){background-color: #f2f2f2;}
.dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
.dropdown:hover .dropbtn {
    background-color: 42f4b3;
}
.dropdown {
	float:right;
    display: inline-block;
}
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}
.dropdown-content  a{
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}
.dropdown-content {background-color: #f1f1f1}
.dropdown:hover .dropdown-content {
    display: block;
}
</style>
</head>
<body>
 <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<ul class ="navBarUl">
  <li><a class="left" href="/">Home</a></li>

  <li><a class="left" href="/contact">Contact</a></li>
  <li><a class="left" href="/about">About</a></li>

  @if(!Auth::check())
	<li><a class="right" href="/register">Register</a></li>
  @endif
  @if(!Auth::check())
	<li><a class="right" href="/login">Login</a></li>
  @endif
  @if(Auth::check())
	<li><a class="right" href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a></li>
	<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		{{ csrf_field() }}
	</form>
  @endif
  @if(Auth::check() && Auth::user()->hasRole('2'))
  <li><a class="right" href="/admin">Admin</a></li>
  @endif
  @if(Auth::check())
    <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn"> <span class="fa fa-bell"> </span> </a>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </li>
    @endif
</ul>
	
</body>
</html>