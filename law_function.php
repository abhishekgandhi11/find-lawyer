<?php
function  add_law($law_name){
	require_once('connect.php');
	$law_id =0;
	//$law_id++;
	$sql = "insert into law (law_name) values ('$law_name')";
	if ($conn->query($sql) === TRUE) {
		echo '<script language="javascript">'; 
		echo 'alert("Law Inserted Successfully..")';
		echo '</script>';	
	} else {
		echo '<script language="javascript">'; 
		echo 'alert("Law Not Inserted..")';
		echo '</script>';
	}
	$conn->close();
}

function  update_law($law_id,$law_name){
	require_once('connect.php');
	$sql = "update law set law_name='$law_name' where law_id=$law_id";
	if ($conn->query($sql) === TRUE) {
		echo '<script language="javascript">'; 
		echo 'alert("Law Updated Successfully..")';
		echo '</script>';	
	} else {
		echo '<script language="javascript">'; 
		echo 'alert("Law Not Updated..")';
		echo '</script>';
	}
	$conn->close();
}


function delete_law($law_id){
    require_once('connect.php');
	$sql = "delete from law where law_id=$law_id";
	if ($conn->query($sql) === TRUE) {
		echo '<script language="javascript">'; 
		echo 'alert("Law Deleted..")';
		echo '</script>';	
	} else {
		echo '<script language="javascript">'; 
		echo 'alert("Law Not Deleted..")';
		echo '</script>';
	}
	$conn->close();
}


function show_law_data(){
	require_once('connect.php');
    $sql = "select * from law";
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
                                                    echo "<th>" . "Law" . "</th>";
													echo "<th>" . "Select" . "</th>";
												echo "</tr>";
												//echo "<br>";
												while($row = $result->fetch_assoc()) {
													echo "<tr>";
														echo "<td>" . $row["law_id"] . "</td>";
														echo "<td>" . $row["law_name"] . "</td>";
							    						//echo "<td>"."<Button type='submit' name=" . $row['law_name'] . " value='btn_delete_law' class='btn btn-success' style='border-radius:5px;height:35px;width:150px;'>"."Delete"."</Button>"."</td>";
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