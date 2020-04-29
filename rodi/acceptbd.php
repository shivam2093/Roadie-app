<?php

include "conn.php";

$a = $_REQUEST['id'];


if($a==null)
{
	
	
	$r["res"] = "Fill all the fields";
	print(json_encode($r));
	
}
else
{
	
	$sql = "update bid set except='1' where bid_id='$a'";
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