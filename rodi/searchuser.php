<?php

include "conn.php";

$a = $_REQUEST['name'];
$sql="select * from usereg where name like '$a%'" ;

$q=mysqli_query($conn,$sql);
$rows=array();
while(($row=mysqli_fetch_assoc($q)) != null)
{
	$rows['data'][]=$row;
}

print(json_encode($rows));

?>