<?php

include "conn.php";

$sql="select  *  from useraddreq u,usereg r,city c where  u.To_City=c.cid and u.From_City=c.cid ";

$q=mysqli_query($conn,$sql);
$rows=array();
while(($row=mysqli_fetch_assoc($q)) != null)
{
	$rows['data'][]=$row;
}

print(json_encode($rows));

?>