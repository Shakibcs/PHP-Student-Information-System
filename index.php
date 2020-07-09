<?php 
ob_start();
session_start();
if($_SESSION['name']!='shakibhousebd')
{
	header('location: login.php');
}

?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="">
</head>
<body>
<table>
<tr>
<td><a href="insert.php">insert</a></td>
</tr>
<tr>
<td><a href="view.php">view</a></td>
</tr>
</table>
</body>
</html>