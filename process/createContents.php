<?php 
include 'databaseconnect.php';

$image_name = array("body_paint","body_repair","customize","electrical","maintenance","mechanical","first","second","third","assi_man","manager","supervisor");

 for($i = 0; $i < sizeof($image_name);$i++){
    $name = $image_name[$i];
    $query = $db->prepare("SELECT `img_name` FROM `contents` WHERE `img_name` = ? ;");
    $query->bind_param('s',$name);
    if($query->execute()){
        $query->store_result();
        $query->bind_result($id);
        // echo $query->affected_rows."<br>";
        if($query->affected_rows == 0){
            $sql = $db->prepare("INSERT INTO `contents`(`img_name`, `date`) VALUES (?, CURRENT_TIMESTAMP);");
            $sql->bind_param('s',$name);
            if($sql->execute()){
                // echo "successfully added".$name." to the database!!";
            }else{
                // echo "error while inserting ".$name." into the database!!";
            }
        }else{
            // echo "error while inserting ".$name." into the database!!";
        }
    }

 }


?>