<?php

include "conn.php";

$c = $_REQUEST['sid'];

if($c==null){

}else{

$sql="select * from useraddreq a,bid b where a.id=b.req_id and b.except='1' and b.trans_id='$c'";

$q=mysqli_query($conn,$sql);
$rows=array();
while(($row=mysqli_fetch_assoc($q)) != null)
{
	$rows['req'][]=$row;
}

print(json_encode($rows));

}

?>