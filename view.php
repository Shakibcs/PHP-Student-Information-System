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
<html>
<head>
<link rel="stylesheet" type="text/css" href="">
<script>
	function confirm_delete(){
	return confirm('are you sure want to delete this data');
	}
</script>
</head>
<body>

<table border="1">
<tr>
<td>Serial</td>
<td>Name</td>
<td>Age</td>
<td>Roll</td>
<td>Email</td>
<td>Action</td>
</tr>
<?php 
	$i=0;
	$statement=$db->prepare("SELECT * FROM std_details");
	$statement->execute();
	$result=$statement->fetchAll(PDO::FETCH_ASSOC);	
	foreach($result as $row){
	$i++;
	?>
	<tr>
	<td><?php echo $i;?></td>
	<td><?php echo $row['name'];?></td>
	<td<?php echo $row['age'];?></td>
	<td><?php echo $row['roll'];?></td>
	<td><?php echo $row['email'];?></td>
	<td><a href="edit.php?id=<?php echo $row['id'];?>">Edit</a></td>
	<td><a onclick="return confirm_delete();" href="delete.php?id=<?php echo $row['id'];?>">Delete</a></td>
	</tr>
<?php	
	}

?>

</table>
<a href="index.php">Back</a>
</body>
</html>