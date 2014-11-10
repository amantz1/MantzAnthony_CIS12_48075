<?php # Admin page for Rock and a Hard Place Productions

$page_title = 'Rock and a Hard Place Productions - ADMIN ONLY';
include ('./includes/header.php');
echo '<h1>Registered Users</h1>';

require ('../../../mysqli_connect.php');

// Number of records to show per page:
$display = 20;

// Determine how many pages there are...
if (isset($_GET['p']) && is_numeric($_GET['p'])) { // Already been determined.
	$pages = $_GET['p'];
} else { // Need to determine.
 	// Count the number of records:
	$q = "SELECT COUNT(user_id) FROM am1346043_class_entity_user";
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
// Default is by registration date.
$sort = (isset($_GET['sort'])) ? $_GET['sort'] : 'rd';

// Determine the sorting order:
switch ($sort) {
	case 'ln':
		$order_by = 'user_lastname ASC';
		break;
	case 'fn':
		$order_by = 'user_firstname ASC';
		break;
	case 'rd':
		$order_by = 'user_regtime ASC';
		break;
	default:
		$order_by = 'user_regtime ASC';
		$sort = 'rd';
		break;
}
	
// Define the query:
$q = "SELECT user_lastname, user_firstname, user_email, DATE_FORMAT(user_regtime, '%M %d, %Y %H:%i:%s') AS dr, user_id FROM am1346043_class_entity_user ORDER BY $order_by LIMIT $start, $display";		
$r = @mysqli_query ($dbc, $q); // Run the query.

// Table header:
echo '<table align="center" cellspacing="0" cellpadding="5" width="75%">
<tr>
	<td align="left"><b>Edit</b></td>
	<td align="left"><b>Delete</b></td>
	<td align="left"><b>'//Uncomment when sort functions are activated<a href="view_users.php?sort=ln">
	.'Last Name</a></b></td>
	<td align="left"><b>'//Uncomment when sort functions are activated<a href="view_users.php?sort=fn">
	.'First Name</a></b></td>
	<td align="left"><b>Email</b></td>
	<td align="left"><b>'//Uncomment when sort functions are activated<a href="view_users.php?sort=rd">
	.'Date Registered</a></b></td>
</tr>
';

// Fetch and print all the records....
$bg = '#eeeeee'; 
while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
	$bg = ($bg=='#eeeeee' ? '#ffffff' : '#eeeeee');
		echo '<tr bgcolor="' . $bg . '">
		<td align="left">'//Uncomment when edit page is active<a href="edit_user.php?id=' . $row['user_id'] . '">
		.'Edit</a></td>
		<td align="left">'//Uncomment when delete page is active<a href="delete_user.php?id=' . $row['user_id'] . '">
		.'Delete</a></td>
		<td align="left">' . $row['user_lastname'] . '</td>
		<td align="left">' . $row['user_firstname'] . '</td>
		<td align="left">' . $row['user_email'] . '</td>
		<td align="left">' . $row['dr'] . '</td>
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
		echo '<a href="view_users.php?s=' . ($start - $display) . '&p=' . $pages . '&sort=' . $sort . '">Previous</a> ';
	}
	
	// Make all the numbered pages:
	for ($i = 1; $i <= $pages; $i++) {
		if ($i != $current_page) {
			echo '<a href="admin.php?s=' . (($display * ($i - 1))) . '&p=' . $pages . '&sort=' . $sort . '">' . $i . '</a> ';
		} else {
			echo $i . ' ';
		}
	} // End of FOR loop.
	
	// If it's not the last page, make a Next button:
	if ($current_page != $pages) {
		echo '<a href="admin.php?s=' . ($start + $display) . '&p=' . $pages . '&sort=' . $sort . '">Next</a>';
	}
	
	echo '</p>'; // Close the paragraph.
	
} // End of links section.
	
include ('./includes/footer.php');
?>