<!DOCTYPE html>
<!--	Author: Colin Redpath
		Date:
		File:	gameIntro.html
		Purpose:
-->

<html>
<head>
	<title>gameIntro</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" >
</head>

<body>
<main id="wrapper">
	<h1>Zombie Survival</h1>
	<?php
		$gameFile = fopen("gameInfo.txt", "a");
		fclose($gameFile);
	?>
	<form action = "gameIntro.php" method = "post">
		<table>			
			<tr>	
				<td>Enter your name:</td>
				<td><input type = "text" size = "20" name = "charName" /></td>
			</tr>

			<tr>	
				<td>Select your gender:</td>
				<td>
					<select name = "charSex">
						<option>Male</option>
						<option>Female</option>
					</select>
				</td>
			</tr>
				<td><input type = "reset" value = "CLEAR THE FORM" /></td>
				<td><input type = "submit" value = "SUBMIT YOUR CHARACTER" /></td>			
			</tr>
		</table>
	</form>
	</main>
</body>
</html>
