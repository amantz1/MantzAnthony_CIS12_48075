<?php #Catalog Page for Rock and a Hard Place Productions

$page_title = 'Rock and a Hard Place - Services';

include ('./includes/header.php');
require ('../../../mysqli_connect.php');
// Default query for this page:
$q = "SELECT service_id, service_name, service_description, service_rate FROM am1346043_class_entity_services ORDER BY service_id ASC";
/*
// Are we looking at a particular artist?
if (isset($_GET['aid']) && filter_var($_GET['aid'], FILTER_VALIDATE_INT, array('min_range' => 1))  ) {
	// Overwrite the query:
	$q = "SELECT artists.artist_id, CONCAT_WS(' ', first_name, middle_name, last_name) AS artist, print_name, price, description, print_id FROM artists, prints WHERE artists.artist_id=prints.artist_id AND prints.artist_id={$_GET['aid']} ORDER BY prints.print_name";
}
*/
// Create the table head:
echo '<table border="0" width="90%" cellspacing="3" cellpadding="3" align="center">
	<tr>
		<td align="left" width="20%"><b>Service</b></td>
		<td align="left" width="60%"><b>Description</b></td>
		<td align="right" width="20%"><b>Rate</b></td>
	</tr>';

// Display all the prints, linked to URLs:
$r = mysqli_query ($dbc, $q);
while ($row = mysqli_fetch_array ($r, MYSQLI_ASSOC)) {

	// Display each record:
	echo "\t<tr>
		<td align=\"left\"><a href=\"view_services.php?sid={$row['service_id']}\">{$row['service_name']}</a></td>
		<td align=\"left\">{$row['service_description']}</td>
		<td align=\"right\">\${$row['service_rate']}</td>
	</tr>\n";

} // End of while loop.

echo '</table>';
mysqli_close($dbc);

include ('./includes/footer.php');
?>