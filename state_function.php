<?php
function  add_state($state_name){
	require_once('connect.php');
    $sql = "insert into state (state_name) values ('$state_name')";
	if ($conn->query($sql) === TRUE) {
		echo '<script language="javascript">'; 
		echo 'alert("State Inserted Successfully..")';
		echo '</script>';	
	} else {
		echo '<script language="javascript">'; 
		echo 'alert("State Not Inserted..")';
		echo '</script>';
	}
	$conn->close();
}

function update_state($state_id,$state_name){
    require_once('connect.php');
	$sql = "update state set state_name='$state_name' where state_id = $state_id";
    if ($conn->query($sql) === TRUE) {
		echo '<script language="javascript">'; 
		echo 'alert("State Updated..")';
		echo '</script>';	
	} else {
		echo '<script language="javascript">'; 
		echo 'alert("State Not Updated..")';
		echo '</script>';
	}
	$conn->close();
}

function delete_state($state_id){
    require_once('connect.php');
	$sql = "delete from state where state_id=$state_id";
	if ($conn->query($sql) === TRUE) {
		echo '<script language="javascript">'; 
		echo 'alert("State Deleted..")';
		echo '</script>';	
	} else {
		echo '<script language="javascript">'; 
		echo 'alert("State Not Deleted..")';
		echo '</script>';
	}
	$conn->close();
}

function show_state_data(){
	require_once('connect.php');
    $sql = "select * from state";
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
                                                    echo "<th>" . "State Id" . "</th>";    
                                                    echo "<th>" . "State" . "</th>";
													
													//echo "<th>" . "Select" . "</th>";
												echo "</tr>";
												//echo "<br>";
												while($row = $result->fetch_assoc()) {
													echo "<tr>";
														echo "<td>" . $row["state_id"] . "</td>";
														echo "<td>" . $row["state_name"] . "</td>";
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