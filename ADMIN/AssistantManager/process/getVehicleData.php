<?php
require "require/dataconf.php";

if(isset($_POST["group_id"]) && !empty($_POST["group_id"])){
    //Get all state data
    $query = $connection->query("SELECT * FROM vehicles WHERE personalId= ".$_POST['group_id']."  ORDER BY plateNumber ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display states list
    if($rowCount > 0){
        echo '<option hidden value="">Select a vehicle</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['id'].'">'.$row['plateNumber'].'</option>';
        }
    }else{
        echo '<option value="">No available vehicles</option>';
    }
}


?>