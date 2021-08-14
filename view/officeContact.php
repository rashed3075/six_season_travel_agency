z<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Office Contact</title>
</head>
<body>
	<?php
	session_start();
	if(!isset($_SESSION['userName'])){
		header("location: ../Controller/admin_login.php");
	}
	?>
	<?php
	include '../View/header.php';

	?>
	<?php
	include '../View/heading.php';

	?>
	<div style="width: 100%; height:350px; background-color: rgb(153, 153, 255); text-align: center;">
		<table width="100%" height="350px">
			<tr>
				<td width="50%" height="350px" style="text-align: center;">
					<img src="add.png" width=50% height="200px"><br>
					<a href="../Controller/addContact.php" style="background-color: red; color: white;width: 100%;">Add Contact Information</a>
				</td>
				<td width="50%" height="350px" style="text-align: center;">
					<img src="update.png" width=50% height="200px"><br>
					<a href="../Controller/updateContact.php"style="background-color: red; color: white;">Update Contact Information</a>
				</td>
			</tr>
		</table>
	
</div>

	<?php 
	include '../View/footer.php';
	?>


</body>
</html>