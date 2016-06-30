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
		$water  = $_POST['water'];
		$food   = $_POST['food'];
		$weapon = $_POST['weapon'];
		$inventory = 0;
		$gameFile = fopen("gameInfo.txt", "r");
		$charInfo = fgets($gameFile);
			while (!feof($gameFile))
				{
						
					$gameData[]= $charInfo;
					$charInfo = fgets($gameFile);
				}
		fclose($gameFile);
		
		if ($water == "1 Bottle")
			$inventory = 1;
		if ($water == "2 Bottles")
			$inventory = 2;
		if ($water == "3 Bottles")
			$inventory = 3;
		if ($food == "1 Ration")
			$inventory = $inventory + 1;
		if ($food == "2 Rations")
			$inventory = $inventory + 2;
		if ($food == "3 Rations")
			$inventory = $inventory + 3;
		if ($weapon == "Machete")
			$inventory = $inventory + 1;
		if ($weapon == "9mm")
			$inventory = $inventory + 1;
		
		if ($inventory <= 5)
		{
			$gameFile = fopen("gameInfo.txt", "a");
			fwrite($gameFile,"$water\r\n $food\r\n $weapon\r\n $inventory\r\n");
			fclose($gameFile);
			print ("<p>You have chosen $water of water, $food, and a $weapon as your gear. We must hurry. Exit your home.</p>");
			}
		else
		{
			print ("<p><strong>SAM:</strong><br/>
			".$gameData[0].", My calculations read your bag is too heavy! Go back inside and take something out. Remember you bag can only hold 5 items.</p>");
		}
		
	?>
	
	<form action = "Page1.php" method = "post" >
	<table>
		<tr>
			<td>
				<input type = "submit" value = "Go Back" />
			</td>	
		</tr>
	</table>
	</form>
	
	<form action = "Page3.php" method = "post" >
	<table>		
			<td>
				<input type = "submit" value = "Exit Home" />
			</td>	
	</table>
	</form>
</main>
</body>
</html>
