<?php
require_once('config.php');
try{
    $conn;
    $dbname = "xkart";
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
   // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    echo '<script language="javascript">'; 
		echo 'alert("Database not Connectd..")';
		echo '</script>';
}
?>