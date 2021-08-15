<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tour Agent Information</title>
	<link rel="stylesheet" type="text/css" href="../view/css/agent.css">
</head>
<body>
	<?php
	session_start();
	if(!isset($_SESSION['userName'])){
		header("location: ../view/login.php");
	}
	?>
	<?php
	include '../view/header.html';

	?>
	<?php
	include '../view/heading.php';

	?>
	<div class="div">
		<table width="100%" height="350px">
		     <tr style="width: 100%;height: 175px;" >
		     	<td width="50%" height="175px" align="center">
		     		<img src="../image/add.png" width=50% height="200px"><br>
		     		<a class="add" href="../view/addAgent.php" style="background-color: rgb(255, 0, 0);color: white;">Add Agent Information</a></td>
		     	<td width="50%" height="175px">
		     		<img src="../image/update.png" width=50% height="200px"><br>
		     		<a class="updateInfo" href="../view/updateAgent.php" style="background-color: rgb(255, 0, 0);color: white;">Update Agent Information</a></td>
		     </tr>
		     <tr  style="width: 100%;height: 175px;" >
		     	
		     	<td colspan="2" width="50%" height="175px">
		     		<img src="../image/all.png" width=25% height="200px"><br>
		     		<a class="show" href="../view/showAgent.php" style="background-color: rgb(255, 0, 0);color: white;">Show Agent Information</a></td>

		     </tr>
		</table>
	
</div>

	<?php 
	include '../view/footer.php';
	?>


</body>
</html>