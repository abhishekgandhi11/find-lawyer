<?php
	require_once('config.php');
		$conn;
		$dbname="xkart";
		$conn = new mysqli($servername, $username, $password, $dbname);
		if($conn->connect_error) {
				echo '<script language="javascript">'; 
				echo 'alert("Database Not Connected")';
				echo '</script>';
			//die("Connection failed: " . $conn->connect_error);
		}
		
?>