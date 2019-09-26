<?php

function  add_city($city_name,$pincode,$state_name){
	require_once('connect.php');
	$sql = "insert into city (name,pincode,state_name) values ('$city_name','$pincode','$state_name')";
	if ($conn->query($sql) === TRUE) {
		echo '<script language="javascript">'; 
		echo 'alert("City Inserted Successfully..")';
		echo '</script>';	
	} else {
		echo '<script language="javascript">'; 
		echo 'alert("City Not Inserted..")';
		echo '</script>';
	}
	$conn->close();
}

// function get_state_id($state_name){
// 	require_once('connect.php');
// 	$sql = "select state_id,state_name from state where state_name='state_name'";
// 		 $result = $conn->query($sql);
// 			if($row1 = $result->fetch_assoc()){
// 				while($row1 = $result->fetch_assoc()) {
// 	 				return $row1["state_id"];
// 				}
				
// 			}
// }

function update_city($city_name,$pincode,$state_name){
	require_once('connect.php');
	$sql = "update city set name='$city_name',state_name='$state_name' where pincode='$pincode'";
	echo $sql;
	if ($conn->query($sql) === TRUE) {
		echo '<script language="javascript">'; 
		echo 'alert("City Updated..")';
		echo '</script>';	
	} else {
		echo '<script language="javascript">'; 
		echo 'alert("City Not Updated..")';
		echo '</script>';
	}
	$conn->close();
}
function delete_city($pincode){
	require_once('connect.php');
	$sql = "delete from city where pincode='$pincode'";
	if ($conn->query($sql) === TRUE) {
		echo '<script language="javascript">'; 
		echo 'alert("City Deleted..")';
		echo '</script>';	
	} else {
		echo '<script language="javascript">'; 
		echo 'alert("City Not Deleted..")';
		echo '</script>';
	}
	$conn->close();
}



function show_data(){
	require_once('connect.php');
	$sql = "select * from city";
         $result = $conn->query($sql);
				if($row = $result->fetch_assoc()){
					echo "<html>";
						echo "<body>";
							echo "<div align='center' class='container'>";
								echo "<div class='row'";
									echo "<div class'col-md-2'>";
									echo "</div>";
									echo "<div class='col-md-8'>";
										echo "<table class='table'>"; 
											echo "<div class='table table-striped'>";
												echo "<tr>";
													echo "<th>" . "City Name" . "</th>";
													echo "<th>" . "Pincode" . "</th>";
													echo "<th>" . "State" . "</th>";
													//echo "<th>" . "Select" . "</th>";
												echo "</tr>";
												//echo "<br>";
												while($row = $result->fetch_assoc()) {
													echo "<tr>";
														//echo "<td>" . $row["cityid"] . "</td>";
														echo "<td>" . $row["name"] . "</td>";
														echo "<td>" . $row["pincode"] . "</td>";
														echo "<td>" . $row["state"] . "</td>";
														//echo "<td>"."<Button type='submit' value=".$row['cityid'] ."class='btn btn-success' style='border-radius:5px;height:35px;width:150px;' value=".$row["cityid"].">"."Get"."</Button>"."</td>";
													echo "</tr>";
											//	echo "<br>";
												}
											echo "</div>";
										echo "</table>";
									echo "</div>";
									echo "<div class'col-md-2'>";
									echo "</div>";						
								echo "</div>";
							echo "</div>";
						echo "</body>";
					echo "</html>";
			}
}
?>