<?php

include "conn.php";

$sql = "select * from city";

$s = mysqli_query($conn,$sql);

$rows = array();

while(($row = mysqli_fetch_assoc($s)) != null){

$rows["data"][] = $row;

}

print(json_encode($rows));

?>