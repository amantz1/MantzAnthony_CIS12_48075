<?php # Script 9.3 -register.php
// This script performs an INSERT query to add a record to the users table

$page_title='Register';
include ('./includes/header.html');

//Check for form submission:
if ($_SERVER['REQEUST_METHOD'] == 'POST'){
	
	$errors = array();
	
	//Check for a first name
	if(empty($POST['first_name'])){
		$errors[] = 'You forgot to enter your first name.';
	} else {
		$fn = trim($_POST['first_name']);
	}
	//Check for a last name
	if(empty($POST['last_name'])){
		$errors[] = 'You forgot to enter your last name.';
	} else {
		$ln = trim($_POST['last_name']);
	}
	//Check for an email address
	if(empty($POST['email'])){
		$errors[] = 'You forgot to enter your email address.';
	} else {
		$e = trim($_POST['first_name']);
	}
	//Check for a passowrd and match against the confirmed password:
	if (empty($_POST['pass1'])){
		if ($_POST['pass1'] != $_POST['pass2']){
			$errors[] = 'Your password did not match the confirmed password.';
		} else {
			$p = trim($_POST['pass1']);
		}
	} else {
		$errors[] = 'You forgot to enter your password.';
	}
	if (empty($errors)) {
		require ('../mysqli_connect.php');
		
		$q = "INSERT INTO users (first_name, last_name, pass, registration_date) VALUES ('$fn', '$ln', '$e', SHA1('$p'), NOW() )";
		$r = mysqli_query ($dbc, $q);
		if ($r) {
			echo '<h1>Thank you!</h1>
			<p>You are now registered. In chapter 12 you will actually be able to log in!</p><p><br /></p>';
			
		} else {
			echo '<h1>System Error</h1>
			<p class="error">You could not be registered due to a system error. We apologize for any inconvenience.<?p>';
			
			echo '<p>'.mysql_error($dbc).'<br /><br />Query: '.$q.'</p>';
		}
		mysqli_close($dbc);
		include ('./includes/footer.html');
		exit();
	} else {
		echo '<h1>Error!</h1>
		<p class="error">The following error(s) occured:<br />';
		foreach ($errors as $msg) {
			echo " - $msg<br />\n";
		}
	}
}
?>