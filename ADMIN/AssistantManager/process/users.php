<?php
    require "require/dataconf.php"; 
	$make = '';
	$query = "SELECT personalinfo.personalId as personalId, personalinfo.user_id as user_id,personalinfo.firstName as firstName, personalinfo.lastName as lastName, users.username as username FROM personalinfo JOIN users ON personalinfo.user_id = users.id WHERE users.type = 'client'";
	$result = mysqli_query($connection, $query);
	while($row = mysqli_fetch_array($result))
	{
	$make .= '<option value="'.$row["personalId"].'">'.$row["username"].'-'.$row["lastName"].','.$row["firstName"].'</option>';	}
?>