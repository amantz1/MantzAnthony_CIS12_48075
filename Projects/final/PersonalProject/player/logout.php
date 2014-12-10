<?php #This page logs the user out of Rock and a Hard Place Productions

if (!isset($_COOKIE['user_id'])){
	require ('./includes/login_functions.php');
	redirect_user();
} else {
	setcookie ('user_id', '',time()-3600, '/', '', 0, 0);
	setcookie ('user_firstname', '',time()-3600, '/', '', 0, 0);
}
$page_title = 'Starving Student Roulette - You have been logged out';
include ('./includes/header.php');
echo '<div id="redtext">';
echo "<h2>You are now logged out, {$_COOKIE['user_firstname']}!</h2><h2>Come back again soon</h2></div>";

include ('./includes/footer.php');

?>
