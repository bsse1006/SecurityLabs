<!DOCTYPE html>
<html>
<head>
    <title>Simple Comment Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
	<div>
		<h1>Leave a Comment</h1><br>
    	<form method="POST" action="">
        	<label for="name">Name:</label>
        	<input type="text" name="name" id="name"><br><br>
        	<label for="comment">Comment:</label>
        	<textarea name="comment" id="comment"></textarea><br><br>
        	<input type="submit" name="submit" value="Submit">
    	</form>
    	<h2>Comments</h2>
    	<?php
	    	if(isset($_POST['submit'])) {
	        	$name = $_POST['name'];
	        	$comment = $_POST['comment'];
	        	// Store comment in a text file
	        	$file = fopen("comments.txt", "a");
	        	fwrite($file, "<b>$name:</b> $comment<br>");
	        	fclose($file);
	    	}
	    	// Display comments from text file
	    	readfile("comments.txt");
    	?>
	</div>
</body>
</html>