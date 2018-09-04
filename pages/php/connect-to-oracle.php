<?php
$login = "slaviknsk";
$pass = "slavik192837465";
$db = "adv";

$conn = OCILogon ($login, $pass, $db);
if($conn){
	echo "Success connect";
}else{
	echo "Connect failed";
}
?>
