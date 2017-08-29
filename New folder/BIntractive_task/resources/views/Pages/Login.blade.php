<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1 align="center">Wellcome to Login Page</h1>
<div align="center">
	<form    method="post" action="/singup">
	{{ csrf_field() }}
		User Name:
		<input type="text" name="Uname" >
		<br>
		PassWord  :
		<input type="password" name="Upass">
		<br>
		<button   >Login</button>
		</form>
		<form method="get" action="/register">
		<button  >Register</button>
		</form>

	
	

</div>
</body>
</html>