<?php
$con=mysqli_connect("localhost","root","","Idata");

	$get_data="select * from user";
	$get_query=mysqli_query($con, $get_data);

	while ($row_data=mysqli_fetch_array($get_query)) {
		$name=$row_data['Name'];
		$age=$row_data['Age'];
		$id=$row_data['Id'];

		echo "<table>
				<tr>
				<td>".$name."</td>
				<td>".$age."</td>
				<td><a href='delete.php?id=$id'>Delete</a></td>
				<td><a href='Update.php?id=$id'>Update</a></td>
				</tr>
			 </table>";
	}




?>