<?php #Login page to be used in conjunction with user_login.php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	require ('./includes/login_functions.php');
	require ('../../../../mysqli_connect.php');
	list ($check, $data) = check_login($dbc, $_POST['email'], $_POST['pass']);
	if ($check) {
		setcookie ('user_id', $data['user_id'], time()+3600, '/', '', 0, 0);
		setcookie ('user_firstname', $data['user_firstname'], time()+3600, '/', '', 0, 0);
		
		redirect_user('../game/playroulette.php');
	} else {
		$errors = $data;
	}
	
	mysqli_close($dbc);
}
include ('./includes/user_login.php');
?>
