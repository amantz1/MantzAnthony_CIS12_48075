<?php # Admin Dashboard page for Rock and a Hard Place Productions
session_start();

if (!isset($_SESSION['admin_id'])){
	require ('../admin/includes/login_functions.php');
	redirect_user();
}

$page_title = 'Rock and a Hard Place Productions - ADMIN Update Services';
include ('./includes/header.php');

echo "<p>Hello {$_SESSION['admin_firstname']}.</p>";
include ('./includes/footer.php');
?>
