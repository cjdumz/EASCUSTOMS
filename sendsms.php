<?php
include 'process/databaseconnect.php';


$query = "SELECT * from appointments join personalinfo on appointments.personalId = personalinfo.personalId where status = 'overdue' and sms = 0";
$sendsms = $db->prepare($query);

if($sendsms->execute()){
$results = $sendsms->get_result();
$sms = "You have missed your appointment -From EAS Customs";
while($row = $results->fetch_assoc()){
     $id = $row['id'];
     $phone = $row['mobileNumber'];
   
    $result = itexmo($phone,$sms,"TR-THESI669020_FIIY5");

if ($result == ""){
echo "iTexMo: No response from server!!!
Please check the METHOD used (CURL or CURL-LESS). If you are using CURL then try CURL-LESS and vice versa.    
Please CONTACT US for help. ";     
}else if ($result == 0){
$updatequery = "UPDATE `appointments` set `sms` = 1 where id = $id";
$updatesms = $db->prepare($updatequery);
$updatesms->execute();
}
else{     
echo "Error Num ". $result . " was encountered!";
}
     }

}

function itexmo($number,$message,$apicode){
$url = 'https://www.itexmo.com/php_api/api.php';
$itexmo = array('1' => $number, '2' => $message, '3' => $apicode);
$param = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($itexmo),
    ),
);
$context  = stream_context_create($param);
return file_get_contents($url, false, $context);}
?>