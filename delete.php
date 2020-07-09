<?php 
include('config.php');


if(isset($_REQUEST['id'])){
$id=$_REQUEST['id'];



$statement = $db->prepare("DELETE FROM std_details WHERE id=?");
$statement->execute(array($id));

header("location:view.php");
}
else
{
header('location:view.php');
}


?>