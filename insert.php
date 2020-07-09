<?php 
ob_start();
session_start();
if($_SESSION['name']!='shakibhousebd')
{
	header('location: login.php');
}

?>
<?php 
include('config.php');
?>
<?php
if(isset($_POST['form1'])){

try{
if(empty($_POST['name'])){
 throw new Exception("Name Can't be empty");
}

if(empty($_POST['age'])){
 throw new Exception("age Can't be empty");
}

if(empty($_POST['roll'])){
 throw new Exception("roll Can't be empty");
}

if(empty($_POST['email'])){
 throw new Exception("Email Can't be empty");
}
if(!(preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $_POST['email']))) {
			throw new Exception("Please enter a valid email address.");
		}

$statement=$db->prepare("INSERT into std_details(name,age,roll,email) VALUES(?,?,?,?)");
$statement->execute(array($_POST['name'],$_POST['age'],$_POST['roll'],$_POST['email']));

$success_message = "Data has been inserted successfully";

}

catch(Exception $e){
	$error_message=$e->getMessage();
	}
	
	}
?>


<html>
<head>
<link rel="stylesheet" type="text/css" href="">
</head>
<body>
<?php 
		if(isset($error_message)){echo $error_message;}
		if(isset($success_message)){echo $success_message;}
	?>
<form action="" method="post">
<table>
<tr>
<td>Name</td>
<td><input type="text" name="name"></td>
</tr>
<tr>
<td>Age</td>
<td><input type="text" name="age"></td>
</tr>
<tr>
<tr>
<td>Roll</td>
<td><input type="text" name="roll"></td>
</tr>
<td>Email</td>
<td><input type="text" name="email"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="Submit" name="form1"></td>
</tr>
<tr>
<td><a href="index.php">Back</a></td>
</tr>
</table>
</form>
</body>
</html>