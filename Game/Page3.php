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
		
		/*foreach ($gameData as $inventory)
		{
			if ($inventory <= 5)*/
				print ("<p>You step out side your house into the apocolypse that awaits you...</p>");
				print ("<p>You hear sirens in the distance and the smell of smoke. The smoke seems to be coming from the east, from the city.
						<br/><strong>SAM:</strong></br>"
						.$gameData[0].",We must head East toward the highway, or North toward the backroads leading to the mountains.</br>
						My programming tells me there will be a lower threat level towards the mountains as the population drops off, but there will also be limited resources too.<br/>
						If we head East for the highway into the city the threat level will be higher, but the recources will be as well.</br>
						I am only your digital advisor, the choice is yours. </p>");
				
	
		
	?>
	<form action = "Page4.php" method = "post" >
	<table>		
			<td>
				<select name = "direction">
					<option>Mountains</option>
					<option>City</option>		
				</select>
				<input type = "submit" value = "Let's Go SAM" />
			</td>	
	</table>
	</form>
</main>
</body>
</html>
