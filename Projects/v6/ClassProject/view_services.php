<?php # This script shows the individual service listings

$row = FALSE; // Assume nothing!

if (isset($_GET['sid']) && filter_var($_GET['sid'], FILTER_VALIDATE_INT, array('min_range' => 1)) ) { // Make sure there's a print ID!

	$sid = $_GET['sid'];
	
	require ('../../../mysqli_connect.php');
	$q = "SELECT s.service_id, s.service_name, s.service_description, s.service_rate, s.service_image, i.image_id, i.image_url FROM am1346043_class_enum_images AS i, am1346043_class_entity_services AS s WHERE s.service_id=$sid AND s.service_image=i.image_id";
	$r = mysqli_query ($dbc, $q);
	if (mysqli_num_rows($r) == 1) { // Good to go!

		// Fetch the information:
		$row = mysqli_fetch_array ($r, MYSQLI_ASSOC);
		
		//Debuggin
/*		while ($row = mysqli_fetch_array ($r, MYSQLI_ASSOC)){
		echo "<p>".$row['service_id']."</p>";
		echo "<p>".$row['image_url']."</p>";
		echo "<p>".$row['image_id']."</p>";
		}
	*/	
		
		// Start the HTML page:
		$page_title = $row['service_name'];
		include ('includes/header.php');
	
		// Display a header:
		echo "<div align=\"center\">
		<h2>{$row['service_name']}</h2>";
		// Add the description or a default message:
		echo '<p align="center">' . ((is_null($row['service_description'])) ? '(No description available)' : $row['service_description']) . '</p>';

		// Get the image information and display the image:
		if ($image = @getimagesize ("./images/$sid")) {
		echo "<div align=\"center\"><img src=\"show_image.php?image=$sid&name=" . urlencode($row['image_url']). "\" $image[3] alt=\"{$row['service_name']}\" /></div>\n";	
		} else {
			echo "<div align=\"center\">".$row['image_url']." not available.</div>\n"; 
		}

		//Display pricing and add to cart button
		echo "<br />\${$row['service_rate']} 
		<a href=\"add_cart.php?sid=$sid\">Add to Cart</a>
		</div><br />";

	} // End of the mysqli_num_rows() IF.
	
	mysqli_close($dbc);

} // End of $_GET['sid'] IF.

if (!$row) { // Show an error message.
	$page_title = 'Error';
	include ('./includes/header.php');
	echo '<div align="center">This page has been accessed in error!</div>';
}

// Complete the page:
include ('./includes/footer.php');
?>