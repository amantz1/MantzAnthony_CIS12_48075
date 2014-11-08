<?php
// Use this to cut and paste into Script 9.3 already done at home. This should hopefully pick up where that script left off
?>

<?php
//The following is for inserting into this script as shown on Script 9.5

require ('../mysqli_connect.php'); //This line has been moved from line 48?

$fn = mysqli_real_escape_string($dbc, trim($_POST['first_name']));
$fn = mysqli_real_escape_string($dbc, trim($_POST['last_name']));
$fn = mysqli_real_escape_string($dbc, trim($_POST['email']));
$fn = mysqli_real_escape_string($dbc, trim($_POST['pass1']));
    