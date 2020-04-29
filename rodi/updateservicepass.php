<?php

include "conn.php";

$a = $_REQUEST['id'];
$b = $_REQUEST['opass'];
$c = $_REQUEST['npass'];

if($a==null || $b==null || $c==null)
{
	$r['res']="fill all the fields";
	print(json_encode($r));
}

$sql = "update transreg set  pass='$c'  where pass='$b' and id='$a'";
$s = mysqli_query($conn,$sql);

if(!$q)
{
	$r['res']="update fail";
	print(json_encode($r));
}
else
{
	$r['res']="update success";
	print(json_encode($r));
}

?>