<?php #This is the shopping cart page for Rock and a Hard Place Productions

$page_title = 'Rock and a Hard Place Productions - Shopping Cart';

include ('./includes/header.php');

// Check if the form has been submitted (to update the cart):
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	// Change any quantities:
	foreach ($_POST['qty'] as $k => $v) {

		// Must be integers!
		$sid = (int) $k;
		$qty = (int) $v;
		
		if ( $qty == 0 ) { // Delete.
			unset ($_SESSION['cart'][$sid]);
		} elseif ( $qty > 0 ) { // Change quantity.
			$_SESSION['cart'][$sid]['quantity'] = $qty;
		}
		
	} // End of FOREACH.
	
} // End of SUBMITTED IF.

// Display the cart if it's not empty...
if (!empty($_SESSION['cart'])) {

	// Retrieve all of the information for the prints in the cart:
	require ('../../../../mysqli_connect.php'); // Connect to the database.
	$q = "SELECT service_id, service_name, service_rate FROM am1346043_class_entity_services AS services WHERE service_id IN (";
	foreach ($_SESSION['cart'] as $sid => $value) {
		$q .= $sid . ',';
	}
	$q = substr($q, 0, -1) . ') ORDER BY service_id ASC';
	$r = mysqli_query ($dbc, $q);
	
	// Create a form and a table:
	echo '<form action="cart.php" method="post">
	<table border="0" width="90%" cellspacing="3" cellpadding="3" align="center">
	<tr>
		<td align="left" width="20%"><b>Service</b></td>
		<td align="right" width="10%"><b>Price</b></td>
		<td align="center" width="10%"><b>Qty</b></td>
		<td align="right" width="10%"><b>Total Price</b></td>
	</tr>
	';

	// Print each item...
	$total = 0; // Total cost of the order.
	while ($row = mysqli_fetch_array ($r, MYSQLI_ASSOC)) {
	
		// Calculate the total and sub-totals.
		$subtotal = $_SESSION['cart'][$row['service_id']]['quantity'] * $_SESSION['cart'][$row['service_id']]['service_price'];
		$total += $subtotal;
		
		// Print the row:
		echo "\t<tr>
		<td align=\"left\">{$row['service_name']}</td>
		<td align=\"right\">\${$_SESSION['cart'][$row['service_id']]['service_price']}</td>
		<td align=\"center\"><input type=\"text\" size=\"3\" name=\"qty[{$row['service_id']}]\" value=\"{$_SESSION['cart'][$row['service_id']]['quantity']}\" /></td>
		<td align=\"right\">$" . number_format ($subtotal, 2) . "</td>
		</tr>\n";
	
	} // End of the WHILE loop.

	mysqli_close($dbc); // Close the database connection.
	$_SESSION['orderTot']=$total;
	// Print the total, close the table, and the form:
	echo '<tr>
		<td colspan="4" align="right"><b>Total:</b></td>
		<td align="right">$' . number_format ($total, 2) . '</td>
	</tr>
	</table>
	<div align="center"><input type="submit" name="submit" value="Update My Cart" /></div>
	</form><p align="center">Enter a quantity of 0 to remove an item.
	<br /><br /><a href="checkout.php">Checkout</a> or <a href="../services.php">Keep Shopping</a></p>';

} else {
	echo '<p>Your cart is currently empty.</p>';
}

include ('./includes/footer.php');

?>