<?php # Admin Dashboard page for Rock and a Hard Place Productions
session_start();

if (!isset($_SESSION['admin_id'])){
	require ('../admin/includes/login_functions.php');
	redirect_user();
}

$page_title = 'Rock and a Hard Place Productions - ADMIN Dashboard';
include ('./includes/header.php');

echo "<p>Hello {$_SESSION['admin_firstname']}.</p>";

echo '<h2><a href="view_users.php" target="_self">View and Edit Users</a></h2>';
echo '<h2><a href="view_orders.php" target="_self">View Orders</a></h2>';
include ('./includes/footer.php');
?>
