<?php

include "conn.php";
$a = $_REQUEST['email'];
if($a == null){

}
else{

$sql = "select pass from usereg where email='$a'";

$s = mysqli_query($conn,$sql);

$rows = array();

while(($rows = mysqli_fetch_assoc($s)) != null){

$rows["pass"][] = $row;

}

print(json_encode($rows));
}
?>