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

if (!isset($_GET['iid'])){echo 'Oops...Epic Fail';}
else {
	$inv=$_GET['iid'];
	$q="SELECT i.invoice_id, i.invoice_total, DATE_FORMAT(i.invoice_time, '%M %d, %Y') AS it, u.user_firstname, u.user_lastname, u.user_phone FROM am1346043_class_entity_user AS u, am1346043_class_entity_invoice AS i WHERE i.user_id = u.user_id AND i.invoice_id=$inv";
	$r = @mysqli_query ($dbc, $q);
	while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
		echo '<h3>Invoice Number: '.$row['invoice_id'].'</h3>';
		echo '<h3>Invoice Date: '.$row['it'].'</h3>';
		echo '<h3>Client: '.$row['user_firstname'].' '.$row['user_lastname'].'</h3>';
		echo '<h4>Phone: '.$row['user_phone'].'</h4>';
	}
		mysqli_free_result ($r);

	// Table header:
	echo '<table align="center" cellspacing="0" cellpadding="5" width="75%">
	<tr>
		<td align="left"><b>Service</b></td>
		<td align="left"><b>Quantity</b></td>
		<td align="left"><b>Rate</b></td>
		<td align="left"><b>Total</b></td>
	</tr>
	';
	$q="SELECT s.service_name, x.service_qty, s.service_rate, i.invoice_total FROM am1346043_class_xref_invserv AS x, am1346043_class_entity_invoice AS i, am1346043_class_entity_services AS s WHERE x.invoice_id = i.invoice_id AND s.service_id = x.service_id AND i.invoice_id=$inv";
	$r = @mysqli_query ($dbc, $q);
	
	// Fetch and print all the records....
	$bg = '#eeeeee'; 
	$invTot=0;
	while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
		$bg = ($bg=='#eeeeee' ? '#ffffff' : '#eeeeee');
			echo '<tr bgcolor="' . $bg . '">
			<td align="left">' . $row['service_name'] . '</td>
			<td align="left">' . $row['service_qty'] . '</td>
			<td align="left">' . $row['service_rate'] . '</td>
			<td align="left">' . $row['service_qty']*$row['service_rate'] . '</td>
		</tr>
		';
		$invTot+=($row['service_qty']*$row['service_rate']);
	} // End of WHILE loop.
	
	echo '<tr colspan="4" align="right"><td><b>Total: $'.$invTot.'</b></td></tr>';
	echo '</table>';
	mysqli_free_result ($r);
	mysqli_close($dbc);
	
}

echo '<p><a href="view_orders.php">Back to Orders</a></p>';

include ('./includes/footer.php');

?>