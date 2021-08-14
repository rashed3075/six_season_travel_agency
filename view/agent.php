<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tour Agent Information</title>
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
		     <tr style="width: 100%;height: 175px;" >
		     	<td width="50%" height="175px" align="center"><a href="../Controller/addAgent.php" style="background-color: rgb(255, 0, 0);color: white;">Add Agent Information</a></td>
		     	<td width="50%" height="175px"><a href="../Controller/updateAgent.php" style="background-color: rgb(255, 0, 0);color: white;">Update Agent Information</a></td>
		     </tr>
		     <tr style="width: 100%;height: 175px;" >
		     	<td width="50%" height="175px"><a href="../Controller/showAgent.php" style="background-color: rgb(255, 0, 0);color: white;">Show Agent Information</a></td>

		     <td width="50%" height="175px"><a href="../Controller/removeAgent.php" style="background-color: rgb(255, 0, 0);color: white;">Remove Agent Information</a></td>
		     </tr>
		</table>
	
</div>

	<?php 
	include '../View/footer.php';
	?>


</body>
</html>