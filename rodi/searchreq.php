<?php

include "conn.php";

$a = $_REQUEST['name'];

if($a == null){

}
else{
$sql="select * from addreq where t_add like '$a%' or f_add like '$a%'";

$q=mysqli_query($conn,$sql);
$rows=array();
while(($row=mysqli_fetch_assoc($q)) != null)
{
	$rows['req'][]=$row;
}

print(json_encode($rows));
}
?>