<!DOCTYPE html>
<!--Author:
	Date:
	File:	gameIntro.php
	Purpose:Chapter 5 Exercise

-->


<html>
<head>
	<title>Game Intro</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>
<body>
<main id="wrapper">
	<h1>Zombie Survival</h1>

	<?php
		
		$name = $_POST['charName'];
		$sex = $_POST['charSex'];
		
		$gameFile = fopen("gameInfo.txt", "a");
		fwrite($gameFile,"$name\r\n $sex\r\n");
		fclose($gameFile);
		
		print ("<p>Hello $name.</br> My name is <strong>SAM</strong> (System Alarm Manager). I am an aritifial intelligence system installed in your home for disaster releif.</p>");
		print("<p>A National Alarm has been raised and your district has been quarantined to contain the unknown threat from escaping. Press proceed to begin doomsday procedures.</p>");
		
	?>

	<table>
		<form action = "Page1.php" method = "post" >		
			<td>
				<input type = "submit" value = "Proceed" />
			</td>	
		</form>
	</table>
</main>
				
</body>
</html>
