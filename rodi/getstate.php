<?php

include "conn.php";
$a = $_REQUEST['id'];
if($a == null){

}
else{

$sql = "select * from state where sid='$a'";

$s = mysqli_query($conn,$sql);

$rows = array();

while(($row = mysqli_fetch_assoc($s)) != null){

$rows["state"][] = $row;

}

print(json_encode($rows));
}
?>