<?php #Functions for use in Rock and a Hard Place Productions User Login

function redirect_user ($page = '../index.php'){
	$url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
	$url=rtrim($url, '/\\');
	$url .='/'.$page;
	header("Location: $url");
	exit();
}

function check_login($dbc, $email ='', $pass = ''){
	$errors = array();
	if (empty($email)){
		$errors[] = 'You forgot to enter your email address.';
	} else {
		$e = mysqli_real_escape_string($dbc, trim($email));
	}
	
	if (empty($pass)){
		$errors[] = 'You forgot to enter your password.';
	} else {
		$p = mysqli_real_escape_string($dbc, trim($pass));
	}
	
	if (empty($errors)){
		$q = "SELECT admin_id, admin_firstname FROM am1346043_entity_admin WHERE admin_email='$e' AND admin_password=SHA1('$p')";
		$r = @mysqli_query ($dbc, $q);
		
		if (mysqli_num_rows($r) == 1) {
			$row = mysqli_fetch_array ($r, MYSQLI_ASSOC);
			return array(true, $row);
		} else {
			$errors[] = 'You\'re not supposed to be here! Click on home, then login as a user, not an admin.';
		}
	}
	return array(false, $errors);
}