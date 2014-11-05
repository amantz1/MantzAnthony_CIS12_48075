<?php
// Use this to cut and paste into Script 9.3 already done at home. This should hopefully pick up where that script left off
?>
<h1>Register</h1>
<form action="register.php" method="post">
	<p>First Name: <input type="text" name="first_name" size="15" maxlength="20" value="php if (isset($_POST'first_name'])) echo $_POST['first_name']; ?>" /></p>
	<p>Last Name: <input type="text" name="last_name" size="15" maxlength="40" value="php if (isset($_POST'last_name'])) echo $_POST['last_name']; ?>" /></p>
	<p>Email Address: <input type="text" name="email" size="20" maxlength="60" value="php if (isset($_POST'email'])) echo $_POST['email']; ?>" /></p>
	<p>Password: <input type="password" name="pass1" size="10" maxlength="20" value="php if (isset($_POST'pass1'])) echo $_POST['pass1']; ?>" /></p>
	<p>Confirm Password: <input type="password" name="pass2" size="10" maxlength="20" value="php if (isset($_POST'pass2'])) echo $_POST['pass2']; ?>" /></p>
	<p><input type="submit" name="submit" value="Register" /></p>
</form>
<?php include ('./includes/footer.html'); ?>

<?php
//The following is for inserting into this script as shown on Script 9.5

require ('../mysqli_connect.php'); //This line has been moved from line 48?

$fn = mysqli_real_escape_string($dbc, trim($_POST['first_name']));
$fn = mysqli_real_escape_string($dbc, trim($_POST['last_name']));
$fn = mysqli_real_escape_string($dbc, trim($_POST['email']));
$fn = mysqli_real_escape_string($dbc, trim($_POST['pass1']));
    