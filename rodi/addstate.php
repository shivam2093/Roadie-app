<?php

include "conn.php";

$a = $_REQUEST['state'];


$b= $_REQUEST['con_id'];

if($a==null || $b==null )
{
	
	
	$r["res"] = "Fill all the fields";
	print(json_encode($r));
	
}
else
{
	
	$sql = "INSERT INTO `state`( `sname`,`coid`) VALUES ('$a','$b')";
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