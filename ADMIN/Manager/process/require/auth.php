<?php
    session_start();

    $type = $_SESSION["type"];
    if($type != 'manager'){
    	header("Location: ../../home.php");
    }
    if(!isset($_SESSION["username"]) && !isset($_SESSION["password"])){
    	if($type != 'admin'){
    		header("Location: ../home.php");
        	exit();
    	}
    }
?>