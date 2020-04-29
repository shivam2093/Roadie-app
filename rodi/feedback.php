<?php

include "conn.php";

$a = $_REQUEST['feedback'];

if($a==null)
{
	
	
	$r["res"] = "Fill all the fields";
	print(json_encode($r));
	
}
else
{
	
	$sql = "INSERT INTO `feedback`( `fname`) VALUES ('$a')";
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