<?php
include_once("db_connect.php");
if(!empty($_POST['rating']) && !empty($_POST['Id'])){
	$Id = $_POST['Id'];
	$userID = 1;		
	$insertRating = "INSERT INTO feedback (ratingNumber, name, comments, created, modified) VALUES ('".$_POST['rating']."', '".$_POST['name']."', '".$_POST["comment"]."', '".date("Y-m-d H:i:s")."', '".date("Y-m-d H:i:s")."')";
	mysqli_query($conn, $insertRating) or die("database error: ". mysqli_error($conn));		
	echo "rating saved!";
}
?>