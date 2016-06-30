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
		$gameFile = fopen("gameInfo.txt", "r");
		$charInfo = fgets($gameFile);
		while (!feof($gameFile))
		{
				
			$gameData[]= $charInfo;
			$charInfo = fgets($gameFile);
		}
		fclose($gameFile);
		print ("<p>You pull off the side of the road as you approach the trail head.</br>
				This trail heads around to the other side of town where they may not be quaruntined. </p>");
		
		
		
	?>
	<form action = "Page6.php" method = "post" >
	<table>		
			<td>
				<input type = "submit" value = "Continue Driving" />
			</td>	
	</table>
	</form>
</main>
</body>
</html>
