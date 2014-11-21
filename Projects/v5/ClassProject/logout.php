<?php #This page logs the user out of Rock and a Hard Place Productions

if (!isset($_COOKIE['user_id'])){
	require ('./includes.login_functions.php');
	redirect_user();
} else {
	setcookie ('user_id', '',time()-3600, '/', '', 0, 0);
	setcookie ('user_firstname', '',time()-3600, '/', '', 0, 0);
}
$page_title = 'Rock and a Hard Place Productions - You have been logged out';
include ('./includes/header.php');
echo "<h2>You are now logged out, {$_COOKIE['user_firstname']}!</h2><p>Come back again soon</p>";

include ('./includes/footer.php');

?>