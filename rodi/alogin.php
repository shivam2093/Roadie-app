<?php

include "conn.php";

$a = $_REQUEST['aemail'];
$b = $_REQUEST['apass'];	

$sql = "select * from admin where email='$a' and pass='$b'";
$s = mysqli_query($conn,$sql);

$rows = array();
while(($row = mysqli_fetch_assoc($s))!= null){

$rows["data"][] = $row;

}

print(json_encode($rows));
?>