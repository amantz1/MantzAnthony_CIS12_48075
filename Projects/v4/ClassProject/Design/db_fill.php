<?php
	echo '<h2>Where\'s the code???</h2><p>You are seeing this because opening the active version of this page actually fills the database. To see the code used please <a href="https://github.com/amantz1/MantzAnthony_CIS12_48075/blob/master/Projects/v2/ClassProject/Design/db_fill.php" target="_blank">click here</a>.</p>';
	
	//Connect to database
	require ('../../../../mysqli_connect.php');

	//This section fills the xref_invserv table and echoes the results
	$q="INSERT INTO am1346043_class_xref_invserv(invoice_id, service_id, service_qty) VALUES ";
	$rows=1500;
	for($i=1;$i<=$rows;$i++){
		$sid=rand(1,14);
		/*if ($sid==1){$p=100;}
		else if ($sid==2){$p=750;}
		else if ($sid==3){$p=4725;}
		else if ($sid==4){$p=18000;}
		else if ($sid==5){$p=750;}
		else if ($sid==6){$p=400;}
		else if ($sid==7){$p=40;}
		else if ($sid==8){$p=320;}
		else if ($sid==9){$p=150;}
		else if ($sid==10){$p=1200;}
		else if ($sid==11){$p=40;}
		else if ($sid==12){$p=300;}
		else if ($sid==13){$p=200;}
		else if ($sid==14){$p=500;}*/
		$q.="('".rand(1,500)."',";
		$q.="'".$sid."',";
		$q.="'".rand(1,8)."')";
		if($i!=$rows)$q.=",";
	}
		$r=@mysqli_query ($dbc, $q);
	if ($r){
		echo '<h1>It finally worked</h1>';
	}
	else{
		echo '<p>'.mysqli_error($dbc).'</p>';
	}	
	
	
	//Retrieve tables
	$q="SELECT invserv_id AS isi, invoice_id AS ii, service_id AS si, service_qty AS qty FROM am1346043_class_xref_invserv";
	$r=@mysqli_query($dbc, $q);
	if ($r){
		echo '<table><tr><th>isi</th><th>ii</th><th>si</th><th>qty</th></tr>';
		while ($row=mysqli_fetch_array($r, MYSQLI_BOTH)){
			echo '<tr><td>'.$row['isi'].'</td><td>'.$row['ii'].'</td><td>'.$row['si'].'</td><td>'.$row['qty'].'</td><td>';
		}
	}else {
		echo '<p>'.mysqli_error($dbc).'</p>';
	}
/*
	/*
	//**********This section fills the entity_user table and echoes the results
	$q="INSERT INTO am1346043_class_entity_user(user_email, user_password, user_firstname, user_lastname, user_phone, user_regtime) VALUES ";
	
	$name = ['Jeremiah','Stanley','Perry','Kerry','Olin','Jesse','Cletus','Chester','Israel','Lon','Duncan','Armand','Neville','Luke','Isaiah','Tyron','Russel','Dylan','Ariel','Duane','Marty','Merlin','Denver','Rolland','Giovanni','Omer','Bobby','Lawrence','Sean','Emilio','Floyd','Nigel','Hal','Dania','Coleen','Genevive','Mikaela','Shelley','Whitley','Marvis','Lorinda','Claretta','Zora','Joselyn','Waltraud','Jolanda','Julissa','Janessa','Alethia','Era','Elna','Mireya','Samatha','Leonore','Penelope','Elois','Lourie','Shonda','Calandra','Ayesha','Ines','Bettie','Synthia'];

	function unixToMySQL($timestamp){
		return date('Y-m-d H:i:s', $timestamp);
	}
	$ti=0;
	$rows=1000;
	for ($i=1;$i<=$rows;$i++){
		$n=$name[rand(0,61)];
		$q.="('".$n.$i."@mindlessmusician.com',";
		$q.="SHA1('".$n.$i."'),";
		$q.="'".$n."',";
		$q.="'".$name[rand(0,62)]."',";
		$q.="'".rand(111,999)."-".rand(111,999)."-".rand(1111,9999)."',";
		$t=time()-((300*24*60*60)-$ti);
		$ut=unixToMySQL($t);
		$ti+=(19*27*23);
		$q.="'".$ut."')";
		if($i!=$rows)$q.=",";
	}
	$r=@mysqli_query ($dbc, $q);
	if ($r){
		echo '<h1>It finally worked</h1>';
	}
	else{
		echo '<p>'.mysqli_error($dbc).'</p>';
	}
	*/
	/*	
	//Retrieve tables
	$q="SELECT user_id AS ui, user_email AS email, user_password AS pass, user_firstname AS fn, user_lastname AS ln, user_phone AS ph, user_regtime AS time FROM am1346043_class_entity_user";
	$r=@mysqli_query($dbc, $q);
	if ($r){
		echo '<table><tr><th>ui</th><th>email</th><th>pass</th><th>fn</th><th>ln</th><th>ph</th><th>time</th></tr>';
		while ($row=mysqli_fetch_array($r, MYSQLI_BOTH)){
			echo '<tr><td>'.$row['ui'].'</td><td>'.$row['email'].'</td><td>'.$row['pass'].'</td><td>'.$row['fn'].'</td><td>'.$row['ln'].'</td><td>'.$row['ph'].'</td><td>'.$row['time'].'</td></tr>';
		}
	}else {
		echo '<p>'.mysqli_error($dbc).'</p>';
	}
	*/
/*	
	$q="SELECT invoice_id, service_qty, service_price FROM am1346043_class_xref_invserv ORDER BY invoice_id ASC";
	$r=@mysqli_query($dbc, $q);
	if ($r){
		while ($row=mysqli_fetch_array($r, MYSQLI_BOTH)){
			echo '<p>'.$row['invoice_id'].'<br/>'.$row['service_qty'].'<br/>'.$row['service_price'].'</p>';
		}
	}
	else {
		echo mysqli_error($dbc);
	}
	*/

//This section needs to have the order total field added

/*
	//**********This section fills the entity_invoice table and echoes the results
	
	function unixToMySQL($timestamp){
		return date('Y-m-d H:i:s', $timestamp);
	}
	$rows=500;
	$ti=0;
	$q="INSERT INTO am1346043_class_entity_invoice(user_id, invoice_total, invoice_time) VALUES ";

	for($i=1;$i<=$rows;$i++){
		$itq="SELECT invoice_id, service_qty, service_price FROM am1346043_class_xref_invserv AS invserv WHERE invoice_id=$i";
		$itr=@mysqli_query($dbc, $itq);
		$row=mysqli_fetch_array($itr, MYSQL_ASSOC);
		if ($row['invoice_id']!='NULL'){	
			$ui=rand(1,1000);
			$q.="('".$ui."',";	
			$tot=0;
			if ($row['invoice_id']==$i){ 
				$sq=$row['service_qty'];
				$sp=$row['service_price'];
				$tot+=($sq*$sp);
			}
			$q.="'".$tot."',";
			$t=time()-((300*24*60*60)-$ti);
			$ut=unixToMySQL($t);
			$ti+=(19*27*23);
			$q.="'".$ut."')";
		}
		else {
			$q="('NULL','NULL','NULL')";
		}
		if($i!=$rows)$q.=",";
		
	}
		//echo '<p>'.$q.'</p>';	

	$r=@mysqli_query ($dbc, $q);
	if ($r){
		echo '<h1>It finally worked</h1>';
	}
	else{
		echo '<p>'.mysqli_error($dbc).'</p>';
	}	
	//Retrieve tables
	$q="SELECT invoice_id AS ii, user_id AS ui, invoice_total as invtot, invoice_time AS it FROM am1346043_class_entity_invoice";
	$r=@mysqli_query($dbc, $q);
	if ($r){
		echo '<table><tr><th>Invoice</th><th>User</th><th>Time</th></tr>';
		while ($row=mysqli_fetch_array($r, MYSQLI_BOTH)){
			echo '<tr><td>'.$row['ii'].'</td><td>'.$row['ui'].'</td><td>'.$row['invtot'].'</td><td>'.$row['it'].'</td></tr>';
		}
	}else {
		echo '<p>'.mysqli_error($dbc).'</p>';
	}
	
	
	/*
	function unixToMySQL($timestamp){
		return date('Y-m-d H:i:s', $timestamp);
	}
	$q="INSERT INTO am1346043_class_entity_invoice(user_id, invoice_total, invoice_time) VALUES ";
	$rows=10;
	$ti=0;
	for($i=1;$i<=$rows;$i++){
		$q.="('".rand(1,1000)."',";
		
		//run loop to pull total order here
		$itq="SELECT invoice_id, service_qty, service_price FROM am1346043_class_xref_invserv AS invserv WHERE invoice_id=$i";
		$itr=@mysqli_query($dbc, $itq);
		$tot=0;
		if ($itr){ $row=mysqli_fetch_array($itr, MYSQL_BOTH);
			$sq=$row['service_qty'];
			$sp=$row['service_price'];
			$tot+=($sq*$sp);
			echo '<p>'.$row['invoice_id'].'  '.$row['service_qty'].'  '.$row['service_price'].'  '.$tot.'</p>';
		}
		$q.="'".$tot."',";
		$t=time()-((300*24*60*60)-$ti);
		$ut=unixToMySQL($t);
		$ti+=(19*27*23);
		$q.="'".$ut."')";
		if($i!=$rows)$q.=",";
		echo '<p>'.$q.'</p>';	
	}
//	$r=@mysqli_query ($dbc, $q);
	if ($r){
		echo '<h1>It finally worked</h1>';
	}
	else{
		echo '<p>'.mysqli_error($dbc).'</p>';
	}	
	//Retrieve tables
	$q="SELECT invoice_id AS ii, user_id AS ui, invoice_total as invtot invoice_time AS it FROM am1346043_class_entity_invoice";
	$r=@mysqli_query($dbc, $q);
	if ($r){
		echo '<table><tr><th>Invoice</th><th>User</th><th>Time</th></tr>';
		while ($row=mysqli_fetch_array($r, MYSQLI_BOTH)){
			echo '<tr><td>'.$row['ii'].'</td><td>'.$row['ui'].'</td><td>'.$row['invtot'].'</td><td>'.$row['it'].'</td></tr>';
		}
	}else {
		echo '<p>'.mysqli_error($dbc).'</p>';
	}
	//**********End Section
*/
?>
