<?php
include 'process/databaseconnect.php';
$days = date('Y-m-d', strtotime('+3 days'));
$query2 = "SELECT * from appointments join personalinfo on appointments.personalId = personalinfo.personalId where date = '$days' and status = 'accepted' and threedayssms = 0";
$sendthreedays = $db->prepare($query2);

$sendthreedays->execute();
$resultsthreedays = $sendthreedays->get_result();

while($row = $resultsthreedays->fetch_assoc()){
	$date = $row['date'];
	$formateddate = date('F j, Y',strtotime($date));
     $threedayssms = 'You have an upcomming appointment on '.$formateddate.' -From EAS Customs';
     $threedaysid = $row['id'];
     $threedaysphone = $row['mobileNumber'];
   
    $resultthreedays = itexmo($threedaysphone,$threedayssms,"TR-THESI669020_FIIY5");

if ($resultthreedays == ""){
echo "iTexMo: No response from server!!!
Please check the METHOD used (CURL or CURL-LESS). If you are using CURL then try CURL-LESS and vice versa.    
Please CONTACT US for help. ";     
}else if ($resultthreedays == 0){
$updatequerythreedays = "UPDATE `appointments` set `threedayssms` = 1 where id = $threedaysid";
$updatesmsthreedays = $db->prepare($updatequerythreedays);
$updatesmsthreedays->execute();
}
else{     
echo "Error Num ". $resultthreedays . " was encountered!";
}
     }

  	

?>