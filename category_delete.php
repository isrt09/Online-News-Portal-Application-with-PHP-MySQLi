<?php
	include 'db/dbcon.php'; 
	$id  = $_GET['id'];
	$sql = "delete from tbl_category where category_id = '$id'";
	$result = mysqli_query($con, $sql);	
	header('location:category.php');
 ?>