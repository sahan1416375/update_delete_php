<?php
$con=mysqli_connect("localhost","root","","Idata");


if (isset($_GET['id'])) {
	$id=$_GET['id'];

	$select_data="select * from user where Id='$id'";
	$select_query=mysqli_query($con, $select_data);
	while ($row_data=mysqli_fetch_array($select_query)) {
		$id=$row_data['Id'];
		$Name=$row_data['Name'];
		$Age=$row_data['Age'];

		echo "Completed";
	}

}
?>

<div>
	<form action="Update.php" method="post" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Enter New Name : </td>
			<td><input type="text" name="Name"></td>
		</tr>
		<tr>
			<td>Enter New Age : </td>
			<td><input type="text" name="Age"></td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="submit">
			</td>
		</tr>
	</table>
	</form>
</div>

<?php
global $con;
if (isset($_POST['submit'])) {
	$id=$_GET['id'];
	$Name=$_POST['Name'];
	$Age=$_POST['Age'];

	$update_data="UPDATE user SET Name='$Name', Age='$Age' WHERE Id='$id'";
	$update_query=musqli_query($con, $update_data);

	if ($update_query) {
		echo "Complete";
	}
}





?>
