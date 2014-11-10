    <?php # Script 9.5 - secure register.php
    // This script performs an INSERT query to add a record to the users table.
    //
$page_title='Register';
include ('./includes/header.html');
     
    // check if form has been submitted
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
     
    // connect to db
	require ('../../mysqli_connect.php');
     
    // create error array
    $errors = array();
     
    // check each field for validity, assign error message if fails
    // first_name
    if (empty($_POST['first_name'])) {
    $errors['fn'] = 'You forgot to enter your first name.';
    } else {
    $fn = mysqli_real_escape_string($dbc,trim($_POST['first_name']));
    }
     
    // last_name
    if (empty($_POST['last_name'])) {
    $errors['ln'] = 'You forgot to enter your last name.';
    } else {
    $ln = mysqli_real_escape_string($dbc,trim($_POST['last_name']));
    }
     
    // email
    if (empty($_POST['email'])) {
    $errors['e'] = 'You forgot to enter your email address.';
    } elseif (!(filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL))) {
    $errors['e'] = 'Your email is not in a valid format.';
    } else {
    $e = mysqli_real_escape_string($dbc,trim($_POST['email']));
    //prevent users with duplicate email addresses
    $q = "SELECT user_id FROM site_users WHERE email='$e'";
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
    if ($_POST['pass1'] != $_POST['pass2']) {
    $errors['p2'] = 'Your passwords do not match.';
    } else {
    $p = mysqli_real_escape_string($dbc,trim($_POST['pass1']));
    }
    } else {
    $errors['p1'] = 'You forgot to enter your password.';
    }
     
    if(empty($errors)) { // if no errors
     
    // build query
    $q= "INSERT INTO am1346043_ullman_users (first_name,last_name,email,pass,registration_date) VALUES ('$fn','$ln','$e',SHA1('$p'),NOW())";
    // $q = "ERROR";
     
    // submit data
    if($r = mysqli_query($dbc,$q)) {
     
    if(mysqli_affected_rows($dbc) == 1) {
    // data successfully inserted
    $message = "<h2>Thank you!</h2><p>Your name has been added to our list of users!</p>";
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
		include ('./includes/footer.html');
    // exit script - do not redisplay form
    exit();
     
    } else {
    $errors['flag'] = "<div class='error-message error'><h2>Error</h2><p>Your registration is not complete.<br />Please doublecheck your information and resubmit after correcting the highlighted errors.</p></div>";
    }
    //disconnect from db
	mysqli_close($dbc); // Close the database connection.
    }
    // begin form output. if submitted with errors - include original submission values with error messages
    echo "<div id='content'>";
    ?>
    <h1>Register</h1>
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
    <?php
    echo "</div>";
include ('./includes/footer.html'); ?>