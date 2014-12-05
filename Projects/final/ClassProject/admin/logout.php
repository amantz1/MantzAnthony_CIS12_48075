<?php #This page logs the admin out of Rock and a Hard Place Productions

session_start();

if (!isset($_SESSION['admin_id'])){
	require ('./includes/login_functions.php');
	redirect_user();
} else {
	$_SESSION = array();
	session_destroy();
	setcookie ('PHPSESSID', '', time()-3600, '/', '', 0, 0);
}
$page_title = 'Rock and a Hard Place Productions - You have been logged out';
include ('./includes/header.php');
echo "<h2>You are now logged out</h2>";

include ('./includes/footer.php');

?>
