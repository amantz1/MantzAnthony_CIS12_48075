<?php 
	/* Anthony Mantz
		9/18/2014
		Assignment 3: Chapter 2 Code Snippets Script 2.5
	*/
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>FOrm Feedback</title>
</head>

<body>
<?php # Script 2.5 - handle_form.php #4

	// Print the submitted information:
	if( !empty($_POST['name']) && !empty($_POST['comments']) && !empty($_POST['email']) ) {
		echo "<p>Thank you, <b>{$_POST['name']}</b>, for the following comments:<br />
	<tt>{$_POST['comments']}</tt></p>
	<p>We will reply to you at <i>{$_POST['email']}</i>.</p>\n";
	} else { // Missing form value.
		echo '<p>Please go back and fill out the form again.</p>';
	}
?>

<p><a href="../Script2_06/calendar.php" target="_self">next</a></p>

</body>
</html>