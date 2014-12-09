<?php # View Order page for Rock and a Hard Place Productions
session_start();

if (!isset($_SESSION['admin_id'])){
	require ('../admin/includes/login_functions.php');
	redirect_user();
}

$page_title = 'Rock and a Hard Place Productions - ADMIN View Order';
include ('./includes/header.php');

echo "<p>Hello {$_SESSION['admin_firstname']}.</p>";
echo '<h1>Invoice Details</h1>';

require ('../../../../mysqli_connect.php');

for($i=1;$i<=509;$i++){
	$q="SELECT x.invoice_id, x.service_qty, s.service_rate FROM am1346043_class_xref_invserv AS x, am1346043_class_entity_services AS s WHERE x.service_id = s.service_id AND x.invoice_id = $i";
	$r = @mysqli_query ($dbc, $q);
		$invTot=0;
	while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
		$invTot+=($row['service_qty']*$row['service_rate']);
		echo $invTot;
	} // End of WHILE loop.
	
	echo '</table>';

	$q="UPDATE am1346043_class_entity_invoice SET invoice_total = $invTot WHERE invoice_id = $i";
	$r = @mysqli_query ($dbc, $q);
}
	mysqli_free_result ($r);
	mysqli_close($dbc);
