<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=eas;charset=utf8', 'eas', 'eas2018');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
