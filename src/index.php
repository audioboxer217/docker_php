<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php 
 
	$now = time();
	
	$scott_bday = strtotime("08-04-1983");
	$scott_age = $now - $scott_bday;
	
	$tiff_bday = strtotime("09-11-1983");
	$tiff_age = $now - $tiff_bday;
	
	$jensen_bday = strtotime("21 June 2012");
	$jensen_age = $now - $jensen_bday;
	
	$finn_bday = strtotime("01 October 2014");
	$finn_age = $now - $finn_bday;
	
	echo '<p>Hello Scott, , today is ' . date('l jS \of F Y h:i A') . '</p>';
	
	echo '<p>You are ' . floor($scott_age/(60*60*24*365)) . ' years old.</p>';
	echo '<p>Tiffany is ' . floor($tiff_age/(60*60*24*365)) . ' years old.</p>';
	echo '<p>Jensen is ' . floor($jensen_age/(60*60*24*365)) . ' years old.</p>';
	echo '<p>Finnegan is ' . floor($finn_age/(60*60*24*30)) . ' months old.</p>';
	
?> 

 </body>
</html>