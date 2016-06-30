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
		print ("<p>You have a limited storage of supplies to survive on. My protocol notified me for you to choose what you will take with you. Choose carefully, as you will need to defend yourself, but you also need food and water to survive.Keep in mind, your bag can only carry 5 five items.</p>");	
		
	?>
	<form action="Page2.php" method="post">
	<table>
		<tr>
			<th colspan="3">Supplies</th>
		</tr>
		<tr>
			<th>Water</th>
			<th>Food</th>
			<th>Weapons</th>
		</tr>
		<tr>
			<td>
				<select name = "water">
					<option>1 Bottle</option>
					<option>2 Bottles</option>
					<option>3 Bottles</option>
				</select>
			</td>
			<td>
				<select name = "food">
					<option>1 Ration</option>
					<option>2 Rations</option>
					<option>3 Rations</option>
				</select>
			</td>
			<td>
				<select name = "weapon">
					<option>Machete</option>
					<option>9mm</option>
				</select>
			</td>
		</tr>
	</table>
	<form action = "Page2.php" method = "post" >
	<table>		
			<td>
				<input type = "submit" value = "Choose" />
			</td>	
	</table>
	</form>
</main>
</body>
</html>
