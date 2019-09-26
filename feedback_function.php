<?php
function set_feedback($stars,$subject,$feedback,$lawyer_email_id,$user_email_id){
    require_once('connect.php');
    $sql = "insert into feedback (star,subject,details,lawyer_email_id,user_email_id) values ($stars,'$subject','$feedback','$lawyer_email_id','$user_email_id')";
	if ($conn->query($sql) === TRUE) {
		echo '<script language="javascript">'; 
		echo 'alert("Feedback Send Successfully..")';
		echo '</script>';	
	} else {
		echo '<script language="javascript">'; 
		echo 'alert("Feedback Not Sent..")';
		echo '</script>';
	}
	$conn->close();
}
?>