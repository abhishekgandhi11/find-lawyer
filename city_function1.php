<?php
function add_city($city_name,$pincode,$state_name){
    require_once('connect1.php');
    try{
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $state_id = state_data($state_name);
            $sql = "insert into city (name,pincode,state_id) values ('$city_name','$pincode',$state_id)";
            $conn->exec($sql);
            echo '<script language="javascript">'; 
            echo 'alert("City Inserted Successfully..")';
            echo '</script>';	
        }
    catch(PDOException $e){
        echo '<script language="javascript">'; 
        echo 'alert("City Not Inserted..")';
        echo '</script>';
    }
}

function state_data($state_name){
    require_once('connect1.php');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("select state_id,state_name from state where state_name = 'state_name'"); 
    $stmt->execute();
    echo $stmt;
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            foreach($stmt->fetchAll() as $k=>$v){
                return $v["state_id"];
            }
}
?>