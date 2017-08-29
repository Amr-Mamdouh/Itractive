<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 Your role is {{$user_role}}
 <br>
{{$_SESSION["role"]}}
<form method="get" action="/Logout">
	<button>Logout</button>
</form>
</html>