<?php # Admin Login page for Rock and a Hard Place Productions

$page_title = 'Rock and a Hard Place Productions - Admin Login';

include ('./includes/header.php');

if (isset($errors) && !empty($errors)){
	echo '<h1>Error!</h1> <p class="error">The following error(s) occurred:<br />';
	foreach ($errors as $msg){
		echo " - $msg<br />\n";
	}
	echo '</p><p>Please try again.</p>';
	
}
?>
<div id="redtext"><h1>Administrator Login</h1></div>
<div id="regform">
<form action="admin.php" method="post">
	<p>Email address: <input type="text" name="email" size="20" maxlength="40" /></p>
    <p>Password: <input type="password" name="pass" size="20" max="20" /></p>
    <p><input type="submit" name="submit" value="login" /></p>
    </form>
</div>
<?php
include ('./includes/footer.php');
?>
