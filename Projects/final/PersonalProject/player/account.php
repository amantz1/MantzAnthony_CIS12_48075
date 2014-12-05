<?php #account.php This is where a user ends up after logging in on Rock and a Hard Place Productions

if (!isset($_COOKIE['user_id'])){
	require ('./includes/login_functions.php');
	redirect_user();
}

$page_title = 'Rock and a Hard Place Productions - Account Info';
include ('./includes/header.php');

echo "<h1>Account Info</h1><p>Thank you for logging in, {$_COOKIE['user_firstname']}!</p><p><a href=\"logout.php\">Logout</a></p>";

include ('./includes/footer.php');
?>
