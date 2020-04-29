<?php

include "conn.php";

$a = $_REQUEST['uid'];

if($a == null){

}
else{


$sql="select * from transreg t,myfav m where m.uid='$a' and m.spid=t.id";

$q=mysqli_query($conn,$sql);
$rows=array();
while(($row=mysqli_fetch_assoc($q)) != null)
{
	$rows['data'][]=$row;
}

print(json_encode($rows));
}
?>