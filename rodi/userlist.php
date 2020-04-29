<?php

include "conn.php";

$sql="select * from usereg";

$q=mysqli_query($conn,$sql);
$rows=array();
while(($row=mysqli_fetch_assoc($q)) != null)
{
	$rows['data'][]=$row;
}

print(json_encode($rows));

?>