<?php 
	/* Anthony Mantz
		9/18/2014
		Assignment 3: Chapter 2 Code Snippets Script 2.2
	*/
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Form Feedback</title>
</head>

<body>
<?php # Script 2.2 handle_form.php
	
	//Create a shorthand for the form data:
	$name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$comments = $_REQUEST['comments'];
	/* Not used:
	$_REQUEST['age'];
	$_REQUEST['gender'];
	$_REQUEST['submit'];
	*/
	//Print the submitted information:
	echo "<p>Thank you, <b>$name</b>, for the following comments:<br />
	<tt>$comments</tt></p>
	<p>We will reply to you at <i>$email</i>.</p>\n";
?>

<p><a href="./Script2_03/form.php" target="_self">next</a></p>

</body>
</html>