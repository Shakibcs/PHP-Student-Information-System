<?php 
	$dbhost='localhost';
	$dbname='student-information';
	$dbuser='root';
	$dbpass='';
	
	try{
	$db=new PDO("mysql:host={$dbhost};dbname={$dbname}",$dbuser,$dbpass);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
	echo "connection error:".$e->getMessage();
	}
?>