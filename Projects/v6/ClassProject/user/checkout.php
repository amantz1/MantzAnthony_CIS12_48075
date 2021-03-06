<?php # This is the order confirmation page for Rock and a Hard Place Productions (skipping any acutal monetary transaction)

// Set the page title and include the HTML header:
$page_title = 'Order Confirmation';
include ('./includes/header.php');

// Assume that the customer is logged in and that this page has access to the customer's ID:
$cid = 1; // Temporary.

// Assume that this page receives the order total:
$total = 178.93; // Temporary.

require ('../../../../mysqli_connect.php'); // Connect to the database.

// Turn autocommit off:
mysqli_autocommit($dbc, FALSE);

//-----Continue from this point after database tables are rewritten---------




// Add the order to the orders table...
$q = "INSERT INTO am1346043_class_entity_invoice (user_id, invoice_total, invoice_time) VALUES ($cid, $total, NOW())";
$r = mysqli_query($dbc, $q);
if (mysqli_affected_rows($dbc) == 1) {

	// Need the order ID:
	$oid = mysqli_insert_id($dbc);
	
	// Insert the specific order contents into the database...
	
	// Prepare the query:
	$q = "INSERT INTO am1346043_class_xref_invserv (invoice_id, service_id, service_qty, service_price) VALUES (?, ?, ?, ?)";
	$stmt = mysqli_prepare($dbc, $q);
	mysqli_stmt_bind_param($stmt, 'iiid', $oid, $sid, $qty, $price);
	
	// Execute each query; count the total affected:
	$affected = 0;
	foreach ($_SESSION['cart'] as $sid => $item) {
		$qty = $item['quantity'];
		$price = $item['service_price'];
		mysqli_stmt_execute($stmt);
		$affected += mysqli_stmt_affected_rows($stmt);
	}

	// Close this prepared statement:
	mysqli_stmt_close($stmt);

	// Report on the success....
	if ($affected == count($_SESSION['cart'])) { // Whohoo!
	
		// Commit the transaction:
		mysqli_commit($dbc);
		
		// Clear the cart:
		unset($_SESSION['cart']);
		
		// Message to the customer:
		echo '<p>Thank you for your order. You will be notified when the items ship.</p>';
		
		// Send emails and do whatever else.
	
	} else { // Rollback and report the problem.
	
		mysqli_rollback($dbc);
		
		echo '<p>Your order could not be processed due to a system error. You will be contacted in order to have the problem fixed. We apologize for the inconvenience.</p>';
		// Send the order information to the administrator.
		
	}

} else { // Rollback and report the problem.

	mysqli_rollback($dbc);

	echo '<p>Your order could not be processed due to a system error. You will be contacted in order to have the problem fixed. We apologize for the inconvenience.</p>';
	
	// Send the order information to the administrator.
	
}

mysqli_close($dbc);

include ('includes/footer.php');
?>