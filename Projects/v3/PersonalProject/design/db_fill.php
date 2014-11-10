<?php
	echo '<h2>Where\'s the code???</h2><p>You are seeing this because opening the active version of this page actually fills the database. To see the code used please <a href="https://github.com/amantz1/MantzAnthony_CIS12_48075/blob/master/Projects/v2/PersonalProject/design/db_fill.php" target="_blank">click here</a>.</p>';

/*	
	//Connect to database
	require ('../../../../mysqli_connect.php');

	//**********This section fills the entity_user table and echoes the results
	$q="INSERT INTO am1346043_pers_entity_user(user_email, user_password, user_firstname, user_lastname, user_regtime, user_balance, user_baltime) VALUES ";
	
	$name = ['Jeremiah','Stanley','Perry','Kerry','Olin','Jesse','Cletus','Chester','Israel','Lon','Duncan','Armand','Neville','Luke','Isaiah','Tyron','Russel','Dylan','Ariel','Duane','Marty','Merlin','Denver','Rolland','Giovanni','Omer','Bobby','Lawrence','Sean','Emilio','Floyd','Nigel','Hal','Dania','Coleen','Genevive','Mikaela','Shelley','Whitley','Marvis','Lorinda','Claretta','Zora','Joselyn','Waltraud','Jolanda','Julissa','Janessa','Alethia','Era','Elna','Mireya','Samatha','Leonore','Penelope','Elois','Lourie','Shonda','Calandra','Ayesha','Ines','Bettie','Synthia'];

	function unixToMySQL($timestamp){
		return date('Y-m-d H:i:s', $timestamp);
	}
	$ti=0;
	$balchange=['.0', '.25', '.50', '.75'];
	$rows=1000;
	for ($i=1;$i<=$rows;$i++){
		$n=$name[rand(0,61)];
		$q.="('".$n.$i."@mindlessgambler.com',";
		$q.="SHA1('".$n.$i."'),";
		$q.="'".$n."',";
		$q.="'".$name[rand(0,62)]."',";
		$t=time()-((300*24*60*60)-$ti);
		$ut=unixToMySQL($t);
		$ti+=(19*27*23);
		$q.="'".$ut."',";
		$q.="'".rand(50,500000).$balchange[rand(0,3)]."',";
		$q.="NOW())";
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
	$q="SELECT user_id AS ui, user_email AS email, user_password AS pass, user_firstname AS fn, user_lastname AS ln, user_regtime AS time, user_balance AS bal, user_baltime AS baltime FROM am1346043_pers_entity_user";
	$r=@mysqli_query($dbc, $q);
	if ($r){
		echo '<table><tr><th>ui</th><th>email</th><th>pass</th><th>fn</th><th>ln</th><th>time</th><th>bal</th><th>baltime</th></tr>';
		while ($row=mysqli_fetch_array($r, MYSQLI_BOTH)){
			echo '<tr><td>'.$row['ui'].'</td><td>'.$row['email'].'</td><td>'.$row['pass'].'</td><td>'.$row['fn'].'</td><td>'.$row['ln'].'</td><td>'.$row['time'].'</td><td>'.$row['bal'].'</td><td>'.$row['baltime'].'</td></tr>';
		}
	}else {
		echo '<p>'.mysqli_error($dbc).'</p>';
	}

	/*
	//**********This section fills the entity_spin table and echoes the results
	function unixToMySQL($timestamp){
		return date('Y-m-d H:i:s', $timestamp);
	}
	$q="INSERT INTO am1346043_pers_entity_spin(number_id, spin_time) VALUES ";
	$rows=1000;
	$ti=0;
	for($i=1;$i<=$rows;$i++){
		$q.="('".rand(1,38)."',";
		$t=time()-((10*24*60*60)-$ti);
		$ut=unixToMySQL($t);
		$ti+=791;
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
	$q="SELECT spin_id AS si, number_id AS ni, spin_time AS st FROM am1346043_pers_entity_spin";
	$r=@mysqli_query($dbc, $q);
	if ($r){
		echo '<table><tr><th>Spin ID</th><th>Number</th><th>Time</th></tr>';
		while ($row=mysqli_fetch_array($r, MYSQLI_BOTH)){
			echo '<tr><td>'.$row['si'].'</td><td>'.$row['ni'].'</td><td>'.$row['st'].'</td></tr>';
		}
	}else {
		echo '<p>'.mysqli_error($dbc).'</p>';
	}
	//**********End Section
	*/
?>