<?php
	echo '<h2>Where\'s the code???</h2><p>You are seeing this because opening the active version of this page actually fills the database. To see the code used please <a href="https://github.com/amantz1/MantzAnthony_CIS12_48075/blob/master/Projects/v2/ClassProject/Design/db_fill.php" target="_blank">click here</a>.</p>';
	
	//Connect to database
	require ('../../../../mysqli_connect.php');

	/*//This section fills the xref_invserv table and echoes the results
	$q="INSERT INTO am1346043_class_xref_invserv(invoice_id, service_id, invserv_qty) VALUES ";
	$rows=5000;
	for($i=1;$i<=$rows;$i++){
		$q.="('".rand(1,2001)."',";
		$q.="'".rand(1,23)."',";
		$q.="'".rand(1,12)."')";
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
	$q="SELECT invserv_id AS isi, invoice_id AS ii, service_id AS si, invserv_qty AS qty FROM am1346043_class_xref_invserv";
	$r=@mysqli_query($dbc, $q);
	if ($r){
		echo '<table><tr><th>isi</th><th>ii</th><th>si</th><th>qty</th></tr>';
		while ($row=mysqli_fetch_array($r, MYSQLI_BOTH)){
			echo '<tr><td>'.$row['isi'].'</td><td>'.$row['ii'].'</td><td>'.$row['si'].'</td><td>'.$row['qty'].'</td></tr>';
		}
	}else {
		echo '<p>'.mysqli_error($dbc).'</p>';
	}
	*/
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
	
	/*
	//**********This section fills the entity_invoice table and echoes the results
	function unixToMySQL($timestamp){
		return date('Y-m-d H:i:s', $timestamp);
	}
	$q="INSERT INTO am1346043_class_entity_invoice(user_id, invoice_time) VALUES ";
	$rows=1000;
	$ti=0;
	for($i=1;$i<=$rows;$i++){
		$q.="('".rand(1,1000)."',";
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
	//Retrieve tables
	$q="SELECT invoice_id AS ii, user_id AS ui, invoice_time AS it FROM am1346043_class_entity_invoice";
	$r=@mysqli_query($dbc, $q);
	if ($r){
		echo '<table><tr><th>Invoice</th><th>User</th><th>Time</th></tr>';
		while ($row=mysqli_fetch_array($r, MYSQLI_BOTH)){
			echo '<tr><td>'.$row['ii'].'</td><td>'.$row['ui'].'</td><td>'.$row['it'].'</td></tr>';
		}
	}else {
		echo '<p>'.mysqli_error($dbc).'</p>';
	}
	//**********End Section
	*/
?>