<?php

include "conn.php";

$sql="select * from useraddreq";

$q=mysqli_query($conn,$sql);
$rows=array();
while(($row=mysqli_fetch_assoc($q)) != null)
{
	$rows['req'][]=$row;
}

print(json_encode($rows));

?>