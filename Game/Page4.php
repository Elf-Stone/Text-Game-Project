<!DOCTYPE html>
<!--Author:   Colin Redpath
	Date:	  3-31-16
	File:	  findCharacter.php
	Purpose:
	
-->

<html>
<head>
	<title>Day 1</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>
<body>
<main id="wrapper">
	<h1>Zombie Survival</h1>
	<?php
		$direction = $_POST['direction'];
		print ("<p>You Choose to go to the $direction.</p>");
		
		$gameFile = fopen("gameInfo.txt", "a");
		fwrite($gameFile,"$direction\r\n");
		fclose($gameFile);
		
		if ($direction == "Mountains")
		{
			print ("<p>You head North, to the shelter and isolation of the Mountains.</br>
				    Resources might be low, but the threat of trouble is as well.</br>
					You turn off a dirt road to a trail you are familiar with. Maybe if they're other people out here they'll know what's going on...</p>");
		}
		else 
			print ("<p>You get in your car and head East toward the highway. There's got to be a relief effort in the city right?..");
		
	?>
	<form action = "Page5.php" method = "post" >
	<table>		
			<td>
				<input type = "submit" value = "Continue Driving" />
			</td>	
	</table>
	</form>
</main>
</body>
</html>
