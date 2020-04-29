<?php

include "conn.php";

$a = $_REQUEST['uemail'];
$b = $_REQUEST['upass'];

$sql = "select * from usereg where email='$a' and pass='$b'";
$s = mysqli_query($conn,$sql);

$rows = array();
while(($row = mysqli_fetch_assoc($s))!= null){

$rows["data"][] = $row;

}

print(json_encode($rows));
?>