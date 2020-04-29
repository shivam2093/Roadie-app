<?php

include "conn.php";
$a = $_REQUEST['email'];
if($a == null){

}
else{

$sql = "select pass from transreg where email='$a'";

$s = mysqli_query($conn,$sql);

$rows = array();

while(($row = mysqli_fetch_assoc($s)) != null){

$rows["pass"][] = $row;

}

print(json_encode($rows));
}
?>