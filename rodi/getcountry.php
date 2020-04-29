<?php

include "conn.php";
$a = $_REQUEST['id'];
if($a == null){

}
else{

$sql = "select * from country where coid='$a'";

$s = mysqli_query($conn,$sql);

$rows = array();

while(($row = mysqli_fetch_assoc($s)) != null){

$rows["country"][] = $row;

}

print(json_encode($rows));
}
?>