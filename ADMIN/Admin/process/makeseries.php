<?php
	
	$db = new mysqli("localhost","root","","thesis");

	$make = '';
	$query = "SELECT make FROM make_series GROUP BY make ORDER BY make ASC";
	$result = mysqli_query($db, $query);
	while($row = mysqli_fetch_array($result))
	{
	$make .= '<option value="'.$row["make"].'">'.$row["make"].'</option>';
	}
?>