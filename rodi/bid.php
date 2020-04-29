<?php

include "conn.php";

$a = $_REQUEST['trans_id'];
$b = $_REQUEST['price'];
$c = $_REQUEST['disc'];
$d = $_REQUEST['terms'];
$e = $_REQUEST['req'];

if($a==null || $b==null || $c==null || $d==null)
{
	
	
	$r["res"] = "Fill all the fields";
	print(json_encode($r));
	
}
else
{
	
	$sql = "INSERT INTO `bid`( `trans_id`, `price`, `disc`, `terms`,`req_id`,`except`) VALUES ('$a','$b','$c','$d','$e','0')";
	$s = mysqli_query($conn,$sql);
	
	if(!$s)
                {
                	$re["res"]="inserting fail";
                	print(json_encode($re));
                }
                else
                {
                 	$re['res']="inserting success";
			print(json_encode($re));	
	}
}
?>