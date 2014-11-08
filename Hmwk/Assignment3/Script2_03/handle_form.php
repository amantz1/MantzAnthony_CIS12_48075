<?php 
	/* Anthony Mantz
		9/18/2014
		Assignment 3: Chapter 2 Code Snippets Script 2.3
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
	
	//Create the $gender variable
	if (isset($_REQUEST['gender'])){
		$gender = $_REQUEST['gender'];
	}else{
		$gender = NULL;
	}
	//Print the submitted information:
	echo "<p>Thank you, <b>$name</b>, for the following comments:<br />
	<tt>$comments</tt></p>
	<p>We will reply to you at <i>$email</i>.</p>\n";
	//Print a message based upon the gender value:
	if($gender =='M') {
		echo '<p><b>Good day, Sir!</b></p>';
	}elseif ($gender == 'F') {
		echo '<p><b>Good day, Madam!</b></p>';
	} else { //No gender selected.
		echo '<p><b>You forgot to enter your gender!</b></p>';
	}
?>

<p><a href="../Script2_04/form.php" target="_self">next</a></p>

</body>
</html>