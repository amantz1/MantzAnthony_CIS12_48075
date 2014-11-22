 <?php #Registration page for Rock and a Hard Place Productions
 	$page_title="Rock and a Hard Place Registration - Join Today";
	include ('./includes/header.php');

    // check if form has been submitted
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
     
    // connect to db
	require ('../../../mysqli_connect.php');
     
    // create error array
    $errors = array();
     
    // check each field for validity, assign error message if fails
    // first_name
	 if (empty($_POST['first_name']) || !preg_match("/^\s*[A-Z][a-z]{1,14}\s*$/", $_POST['first_name'])){
		$errors['fn'] = 'Please enter your first name with a capital first letter.';
	}
	else {
    	$fn = mysqli_real_escape_string($dbc,trim($_POST['first_name']));
    }
     
    // last_name
	if (empty($_POST['last_name']) || !preg_match("/^\s*[A-Z][a-z]{1,19}\s*$/", $_POST['last_name'])){
		$errors['ln'] = 'Please enter your last name with a capital first letter.';
	}
	else {
    	$ln = mysqli_real_escape_string($dbc,trim($_POST['last_name']));
    }
     
    // email
    if (empty($_POST['email'])) {
    	$errors['e'] = 'Please enter your email address.';
    }
	else if (!preg_match("/^[A-Za-z0-9]+\.?([A-Za-z0-9]+)?@(([A-Za-z0-9]+)?\.?)*[A-Za-z0-9]+\.[A-Za-z0-9]{2,3}$/", $_POST['email'])) {
    	$errors['e'] = 'Your email is not in a valid format.';
    }
	else {
    	$e = mysqli_real_escape_string($dbc,trim($_POST['email']));
		//prevent users with duplicate email addresses
		$q = "SELECT admin_id FROM am1346043_entity_admin WHERE admin_email='$e'";
		if ($r = @mysqli_query($dbc, $q)) {
			if(mysqli_num_rows($r) != 0) {
				$errors['e'] = 'Sorry, that email has already been used. Please enter a different email address.';
			}
			// free result set
			mysqli_free_result($r);
		}	
    }
	
	
    // pass1==pass2
    if (!empty($_POST['pass1'])) {
    	if (!preg_match("/^\s*(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?).{6,20}\s*$/", $_POST['pass1'])) {
			$errors['p1'] = 'Your password must be between 6 and 20 characters containing at least one lowercase letter, one uppercase letter, and one number';
		}
		else if ($_POST['pass1'] != $_POST['pass2']) {
    		$errors['p2'] = 'Your passwords do not match.';
    	}
		else {
    		$p = mysqli_real_escape_string($dbc,trim($_POST['pass1']));
    	}
    }
	else {
    	$errors['p1'] = 'Please enter your password.';
    }
     
    if(empty($errors)) { // if no errors
     
    // build query
    $q= "INSERT INTO am1346043_entity_admin (admin_firstname,admin_lastname,admin_email,admin_password) VALUES ('$fn','$ln','$e',SHA1('$p'))";
    // $q = "ERROR";
     
    // submit data
    if($r = mysqli_query($dbc,$q)) {
     
    if(mysqli_affected_rows($dbc) == 1) {
    // data successfully inserted
    $message = "<h2>Thank you!</h2><p>You are about to experience the best in digital audio, video, and web design!</p>";
    } else {
    // error - data not inserted
    $message = "<h2>System Error</h2><p class='error'>Your information could not be added to our database.<br />We apologize for any inconvenience, please <a href='javascript:history.back()'>try again</a>.</p>";
    $message .= '<p><span class="content-caption">Debugging information</span>Error message: <br />'.mysqli_error($dbc).'<br /><br />Query: <br />'. $q .'</p>';
    }
    // free result set -- not needed because insert statement returns boolean value
    //mysqli_free_result($r);
     
    } else {
    //query unsuccessful
    $message = '<h2>Error</h2><p class="error-message error">There was an error accessing the database. Please try again later.</p>';	
    }
    //disconnect from db
		mysqli_close($dbc);
    // provide feedback from submission
    echo '<div id="content" class="message">'.$message.'</div>';
     
    // include footer
		include ('./includes/footer.php');
    // exit script - do not redisplay form
    exit();
     
    } else {
    $errors['flag'] = "<div class='error-message error'><h2>Error</h2><p>Your registration is not complete.<br />Please doublecheck your information and resubmit after correcting the highlighted errors.</p></div>";
    }
    //disconnect from db
	mysqli_close($dbc); // Close the database connection.
    }
?>	
<!--------------------Begin Form------------------------>
    <h2>Admin Registration</h2>
    <?php echo (isset($errors['flag']))? $errors['flag'] : ''; ?>
    <form action="" method="post">
    <p>
    <label for='fn'>First Name: </label>
    <input type="text" id='fn' name="first_name" size="15" maxlength="20" value="<?php if (isset($_POST['first_name'])) echo $_POST['first_name']; ?>" />
    <?php echo (isset($errors['fn']))?'<span class="error">'.$errors['fn'].'</span>' : ''; ?>
    </p>
    <p>
    <label for='ln'>Last Name: </label>
    <input type="text" id='ln' name="last_name" size="15" maxlength="40" value="<?php if (isset($_POST['last_name'])) echo $_POST['last_name']; ?>" />
    <?php echo (isset($errors['ln']))?'<span class="error">'.$errors['ln'].'</span>' : ''; ?></p>
    <p>
    <label for='e'>Email Address: </label>
    <input type="text" id='e' name="email" size="20" maxlength="60" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" />
    <?php echo (isset($errors['e']))?'<span class="error">'.$errors['e'].'</span>' : ''; ?>
    </p>
    <p>
    <label for='p1'>Password: </label>
    <input type="password" id='p1' name="pass1" size="10" maxlength="20" value="<?php if (isset($_POST['pass1'])) echo $_POST['pass1']; ?>" />
    <?php echo (isset($errors['p1']))?'<span class="error">'.$errors['p1'].'</span>' : ''; ?>
    </p>
    <p>
    <label for='p2'>Confirm Password: </label>
    <input type="password" id='p2' name="pass2" size="10" maxlength="20" value="<?php if (isset($_POST['pass2'])) echo $_POST['pass2']; ?>" />
    <?php echo (isset($errors['p2']))?'<span class="error">'.$errors['p2'].'</span>' : ''; ?>
    </p>
    <p>
    <input type="submit" name="submit" value="Register" />
    </p>
    </form>
<!---------------------End Form------------------------->
<?php
	include ('./includes/footer.php');
?> 
  
</body>
</html>