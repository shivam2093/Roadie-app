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
	
	$sql ="delete from usereg where id='$a'";
	$s = mysqli_query($conn,$sql);
	
	if(!$s)
                {
	
                	$re["res"]="delete fail";
                	print(json_encode($re));
                }
                else
                {
                 	$re["res"]="delete success";
	print(json_encode($re));	
	}
}
?>