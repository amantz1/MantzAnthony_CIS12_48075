<?php #account.php This is where a user ends up after logging in on Rock and a Hard Place Productions

if (!isset($_COOKIE['user_id'])){
	require ('./includes/login_functions.php');
	redirect_user();
}

$page_title = 'Rock and a Hard Place Productions - Account Info';
include ('./includes/header.php');
?>
<div id="redtext"><h2>Thank you for logging in, <?php echo $_COOKIE['user_firstname'];?>!</h2></div>
<h3><a href="../services.php">Shop the Site</a></h3>
<h3><a href="cart.php">View Cart</a></h3>
<p><a href="logout.php">Logout</a></p>

<?php
include ('./includes/footer.php');
?>
