<?php

include "conn.php";

$a = $_REQUEST['id'];

if($a==null){

}
else{

 $sql="select * from bid where req_id='$a'";

$q=mysqli_query($conn,$sql);
$rows=array();
while(($row=mysqli_fetch_assoc($q)) != null)
{
	$rows['bid'][]=$row;
}

print(json_encode($rows));
}
?>