<?php # User Login page for Starving Student Roulette

$page_title = 'Rock and a Hard Place Productions - User Login';

include ('./includes/header.php');

if (isset($errors) && !empty($errors)){
	echo '<h1>Error!</h1> <p class="error">The following error(s) occurred:<br />';
	foreach ($errors as $msg){
		echo " - $msg<br />\n";
	}
	echo '</p><p>Please try again.</p>';
	
}
?>
<h1>Client Login</h1>
<form action="login.php" method="post">
	<p>Email address: <input type="text" name="email" size="20" maxlength="40" /></p>
    <p>Password: <input type="password" name="pass" size="20" max="20" /></p>
    <p><input type="submit" name="submit" value="login" /></p>
    </form>

<?php
include ('./includes/footer.php');
?>
