<?php
	//Databse connect
	DEFINE ('DB_USER', '48075');
	DEFINE ('DB_PASSWORD', '48075cis12');
	DEFINE ('DB_HOST', '209.129.8.5');
	DEFINE ('DB_NAME', '48075');
	
	$dbc = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MYSQL: ' . mysqli_connect_error() );
	mysqli_set_charset($dbc, 'utf8');