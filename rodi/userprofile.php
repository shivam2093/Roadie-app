<?php

include "conn.php";

$a = $_REQUEST['id'];

$sql = "select * from usereg u,city c,state s,country con where u.city=c.cname and u.state=s.sname and  u.country=con.coname and  id='$a'";
$s = mysqli_query($conn,$sql);

$rows = array();
while(($row = mysqli_fetch_assoc($s))!= null){

$rows["data"][] = $row;

}

print(json_encode($rows));
?>