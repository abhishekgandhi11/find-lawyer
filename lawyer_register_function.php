<?php
function set_lawyer_data($email_id,$first_name,$last_name,$address1,$address2,$contact_no,$experience,$law_name,$city_name,$website,$state,$pass)
{
	require_once('connect.php');
    $sql = "insert into lawyers (email_id,first_name,last_name,address_1,address_2,contact_no,experience,law_name,city_name,website,state_name,password) values('$email_id','$first_name','$last_name','$address1','$address2',$contact_no,$experience,'$law_name','$city_name','$website','$state','$pass')";
	if ($conn->query($sql) === TRUE) {
		echo '<script language="javascript">'; 
		echo 'alert("Lawyer Inserted Successfully..")';
		echo '</script>';	
	} else {
		echo '<script language="javascript">'; 
		echo 'alert("Lawyer Not Inserted..")';
		echo '</script>';
	}
	$conn->close();
}
?>