<?php
if($_SERVER['REQUEST_METHOD'] == 'GET') {
ADDED THIS IN THE REMOTE
if (!isset($myObj)) $myObj = new stdClass();
	
$myObj->result = (int)$_GET['fruit'];
$myObj->age = 30;
$myObj->city = "New York";

$myJSON = json_encode($myObj);

echo $myJSON;
	
}
?>
