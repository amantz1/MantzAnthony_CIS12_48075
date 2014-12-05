<?php #Login page to be used in conjunctino with admin_login.php for Rock and a Hard Place Productions

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	require ('./includes/login_functions.php');
	require ('../../../../mysqli_connect.php');
	list ($check, $data) = check_login($dbc, $_POST['email'], $_POST['pass']);
	if ($check) {
		session_start();
		$_SESSION['admin_id']=$data['admin_id'];
		$_SESSION['admin_firstname']=$data['admin_firstname'];
		
		redirect_user('./admin_dashboard.php');
	} else {
		$errors = $data;
	}
	
	mysqli_close($dbc);
}
include ('./includes/admin_login.php');
?>