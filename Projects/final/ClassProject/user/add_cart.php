<?php # This script adds to shopping cart in Rock and a Hard Place Productions
// Set the page title and include the HTML header:
$page_title = 'Add to Cart';
include ('./includes/header.php');
echo '<div id="redtext">';
if (isset ($_GET['sid']) && filter_var($_GET['sid'], FILTER_VALIDATE_INT, array('min_range' => 1))  ) { // Check for a print ID.
	$sid = $_GET['sid'];

	// Check if the cart already contains one of these prints;
	// If so, increment the quantity:
	if (isset($_SESSION['cart'][$sid])) {

		$_SESSION['cart'][$sid]['quantity']++; // Add another.

		// Display a message:
		echo '<p>Another awesome service has been added to your shopping cart.</p>';
		
	} else { // New product to the cart.

		// Get the print's price from the database:
		require ('../../../../mysqli_connect.php'); // Connect to the database.
		$q = "SELECT service_rate FROM am1346043_class_entity_services WHERE service_id=$sid";
		$r = mysqli_query ($dbc, $q);		
		if (mysqli_num_rows($r) == 1) { // Valid service ID.
	
			// Fetch the information.
			list($price) = mysqli_fetch_array ($r, MYSQLI_NUM);
			
			// Add to the cart:
			$_SESSION['cart'][$sid] = array ('quantity' => 1, 'service_price' => $price);

			// Display a message:
			echo '<p>The service has been added to your shopping cart.</p>';

		} else { // Not a valid print ID.
			echo '<div align="center">This page has been accessed in error!</div>';
		}
		
		mysqli_close($dbc);

	} // End of isset($_SESSION['cart'][$sid] conditional.

} else { // No print ID.
	echo '<div align="center">This page has been accessed in error!</div>';
}
echo '</div>';
include ('./includes/footer.php');
?>