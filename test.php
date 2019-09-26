<?php
require_once('connect.php');
try
{
    $city_name = 'BARODA';
    $pincode = '300018';
    $state_name = 'GUJARAT';
    $sql = "insert into city (name,pincode,state) values('$city_name','$pincode','$state_name')";
    $conn->exec($sql);
    echo "Record Inserted...";	
}
catch(PDOException $e){
    echo  "<br>" . $e->getMessage();
}	

?>
<html>
    <head>
    </head>
    <body>
        <form name="form1" method="post">
        
    </body>
</html>