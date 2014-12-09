<?php # Admin Dashboard page for Rock and a Hard Place Productions
session_start();

if (!isset($_SESSION['admin_id'])){
	require ('../admin/includes/login_functions.php');
	redirect_user();
}

$page_title = 'Rock and a Hard Place Productions - ADMIN View Orders';
include ('./includes/header.php');

echo "<p>Hello {$_SESSION['admin_firstname']}.</p>";
echo '<h1>Invoices</h1>';

require ('../../../../mysqli_connect.php');

// Number of records to show per page:
$display = 20;

// Determine how many pages there are...
if (isset($_GET['p']) && is_numeric($_GET['p'])) { // Already been determined.
	$pages = $_GET['p'];
} else { // Need to determine.
 	// Count the number of records:
	$q = "SELECT COUNT(invoice_id) FROM am1346043_class_entity_invoice";
	$r = @mysqli_query ($dbc, $q);
	$row = @mysqli_fetch_array ($r, MYSQLI_NUM);
	$records = $row[0];
	// Calculate the number of pages...
	if ($records > $display) { // More than 1 page.
		$pages = ceil ($records/$display);
	} else {
		$pages = 1;
	}
} // End of p IF.

// Determine where in the database to start returning results...
if (isset($_GET['s']) && is_numeric($_GET['s'])) {
	$start = $_GET['s'];
} else {
	$start = 0;
}

// Determine the sort...
// Default is by invoice date.
$sort = (isset($_GET['sort'])) ? $_GET['sort'] : 'dp';

// Determine the sorting order:
switch ($sort) {
	case 'lna':
		$order_by = 'user_lastname ASC';
		break;
	case 'lnd':
		$order_by = 'user_lastname DESC';
		break;
	case 'fna':
		$order_by = 'user_firstname ASC';
		break;
	case 'fnd':
		$order_by = 'user_firstname DESC';
		break;
	case 'ina':
		$order_by = 'invoice_id ASC';
		break;
	case 'ind':
		$order_by = 'invoice_id DESC';
		break;
	case 'dpa':
		$order_by = 'it ASC';
		break;
	default:
		$order_by = 'it DESC';
		$sort = 'dpd';
		break;
}


// Define the query:

$q="SELECT i.invoice_id, i.invoice_total, DATE_FORMAT(i.invoice_time, '%M %d, %Y %H:%i:%s') AS it, u.user_firstname, u.user_lastname FROM am1346043_class_entity_user AS u, am1346043_class_entity_invoice AS i WHERE u.user_id = i.user_id ORDER BY $order_by LIMIT $start, $display";
$r = @mysqli_query ($dbc, $q);
	
// Table header:
echo '<table align="center" cellspacing="0" cellpadding="5" width="75%">
<tr>
	<td align="left"></td>
	<td align="left"><b>Last Name<a href="view_orders.php?sort=lna"> v</a></b>
	<b><a href="view_orders.php?sort=lnd"> ^</a></b></td>
	<td align="left"><b>First Name<a href="view_orders.php?sort=fna">v</b>
	<b><a href="view_orders.php?sort=fnd"> ^</a></b></td>
	<td align="left"><b>Invoice Number<a href="view_orders.php?sort=ina">v</b>
	<b><a href="view_orders.php?sort=ind"> ^</a></b></td>
	<td align="left"><b>Invoice Total</b></td>
	<td align="left"><b>Date Placed<a href="view_orders.php?sort=dpa">v</b>
	<b><a href="view_orders.php?sort=dpd"> ^</a></b></td>
</tr>
';

// Fetch and print all the records....
$bg = '#eeeeee'; 
while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
	$bg = ($bg=='#eeeeee' ? '#ffffff' : '#eeeeee');
		echo '<tr bgcolor="' . $bg . '">
		<td align="left"><a href="view_order.php?iid=' . $row['invoice_id'] . '">View</a></td>
		<td align="left">' . $row['user_lastname'] . '</td>
		<td align="left">' . $row['user_firstname'] . '</td>
		<td align="left">' . $row['invoice_id'] . '</td>
		<td align="left">' . $row['invoice_total'] . '</td>
		<td align="left">' . $row['it'] . '</td>
	</tr>
	';
} // End of WHILE loop.

echo '</table>';
mysqli_free_result ($r);
mysqli_close($dbc);

// Make the links to other pages, if necessary.
if ($pages > 1) {
	
	echo '<br /><p>';
	$current_page = ($start/$display) + 1;
	
	// If it's not the first page, make a Previous button:
	if ($current_page != 1) {
		echo '<a href="view_orders.php?s=' . ($start - $display) . '&p=' . $pages . '&sort=' . $sort . '">Previous</a> ';
	}
	
	// Make all the numbered pages:
	for ($i = 1; $i <= $pages; $i++) {
		if ($i != $current_page) {
			echo '<a href="view_orders.php?s=' . (($display * ($i - 1))) . '&p=' . $pages . '&sort=' . $sort . '">' . $i . '</a> ';
		} else {
			echo $i . ' ';
		}
	} // End of FOR loop.
	
	// If it's not the last page, make a Next button:
	if ($current_page != $pages) {
		echo '<a href="view_orders.php?s=' . ($start + $display) . '&p=' . $pages . '&sort=' . $sort . '">Next</a>';
	}
	
	echo '</p>'; // Close the paragraph.
	
} // End of links section.

include ('./includes/footer.php');
?>
