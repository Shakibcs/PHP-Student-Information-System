<?php 
include('config.php');

if(isset($_POST['login_form'])){

	try{
	if(empty($_POST['username'])){
		throw new Exception("username cannot be empty");
	}
	if(empty($_POST['password'])){
		throw new Exception(" password cannot be empty");
	}

$password=md5($_POST['password']);
$num=0;
$statement=$db->prepare("select * from login where username=? and password=?");
$statement->execute(array($_POST['username'],$password));
$num=$statement->rowCount();
if($num>0){
	session_start();
	$_SESSION['name']='shakibhousebd';
	header('location:index.php');
}
else
{
throw new Exception('Invalid Username or Password');
}



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
<h2>Login</h2>
	<?php 
	if(isset($error_message)){echo $error_message;}
	?>
<form action="" method="post">
<table>
<tr>
<td>Username</td>
<td><input type="text" name="username"></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="password"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="Login" name="login_form"></td>
</tr>
</table>
</form>
</body>
</html>