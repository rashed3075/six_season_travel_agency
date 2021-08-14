<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pakcage_Information</title>
</head>
<body>

	<?php
	session_start();
	if(!isset($_SESSION['userName'])||!isset($_COOKIE['userName'])){
		header("location: ../view/login.php");
	}
	?>
	<?php
	include '../view/header.html';

	?>

	<?php
	include '../view/heading.php';
	?>

		<div style="width: 100%; height:350px; background-color: rgb(153, 153, 255); text-align: center;">
		<table width="100%" height="350px">
		     <tr style="width: 100%;height: 175px;" >
		     	<td width="50%" height="175px" align="center"><a href="../Controller/addPackage.php" style="background-color: rgb(255, 0, 0);color: white;">Add Package Information</a></td>
		     	<td width="50%" height="175px"><a href="../Controller/updatePackage.php" style="background-color: rgb(255, 0, 0);color: white;">Update Package Information</a></td>
		     </tr>
		     <tr style="width: 100%;height: 175px;" >
		     	<td colspan="2"  width="50%" height="175px"><a href="../Controller/admin_login.php" style="background-color: rgb(255, 0, 0);color: white;">Show Package Information</a></td>
		     
		     </tr>
		</table>
	
</div>



	<?php 
	include '../view/footer.php';
	?>

</body>
</html>