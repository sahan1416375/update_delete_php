<?php
$con=mysqli_connect("localhost","root","","Idata");


if (isset($_POST['submit'])) {
	$name=$_POST['name'];
	$age=$_POST['age'];
	$insert_data="INSERT INTO user (Name, Age) VALUES ('$name','$age')";

	$insert_query=mysqli_query($con, $insert_data);
}

if (isset($_POST['details'])) {
	$get_data="select * from user";
	$get_query=mysqli_query($con, $get_data);

	while ($row_data=mysqli_fetch_array($get_query)) {
		$name=$row_data['Name'];
		$age=$row_data['Age'];

		echo "<table>
				<tr>
				<td>".$name."</td>
				<td>".$age."</td>
				</tr>
			 </table>";
	}
}

?>