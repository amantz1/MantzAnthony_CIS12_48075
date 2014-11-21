<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
<?php 
	$name = ['Jeremiah','Stanley','Perry','Kerry','Olin','Jesse','Cletus','Chester','Israel','Lon','Duncan','Armand','Neville','Luke','Isaiah','Tyron','Russel','Dylan','Ariel','Duane','Marty','Merlin','Denver','Rolland','Giovanni','Omer','Bobby','Lawrence','Sean','Emilio','Floyd','Nigel','Hal','Dania','Coleen','Genevive','Mikaela','Shelley','Whitley','Marvis','Lorinda','Claretta','Zora','Joselyn','Waltraud','Jolanda','Julissa','Janessa','Alethia','Era','Elna','Mireya','Samatha','Leonore','Penelope','Elois','Lourie','Shonda','Calandra','Ayesha','Ines','Bettie','Synthia'];
	for($i=1; $i<=10; $i++){
	$fnid=rand(0,62);
	$lnid=rand(0,62);
	$fn=$name[$fnid];
	$ln=$name[$lnid];
		
		echo '<p>'.$fn.$ln.'</p>';
	}
?>
</body>
</html>