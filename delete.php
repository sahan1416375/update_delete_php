<?php
$con=mysqli_connect("localhost","root","","Idata");
if (isset($_GET["id"])) {
	$id=$_GET['id'];
	$select_data="delete from user where Id='$id'";

	$select_query=mysqli_query($con, $select_data);

	if ($select_query) {
	echo "Deleted!!!";
	}
}




?>