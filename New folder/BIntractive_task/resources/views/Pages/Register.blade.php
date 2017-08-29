<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Wellcome to Register Page</h1>
<div>
	<form action="/home" method="post">
	{{csrf_field ()}}
	
		Name:
		<input type="text" name="Uname" autofocus="on">
		<br>
		Email:
		<input type="Email" name="Umail">
		<br>
		PassWord:
		<input type="password" name="Upass">
		<br>
		Confirm Password:
		<input type="password" name="Upass2">
		<br>
		<input type="radio" name="role" value="administrator">administrator
		<input type="radio" name="role" value="editor">editor
		<input type="radio" name="role" value="client">client
		<button action="/home">Register</button>
		<br>

	</form>
</div>

</body>
</html>