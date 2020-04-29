<?php

include "conn.php";

$a = $_REQUEST['name'];
$b = $_REQUEST['email'];
$d = $_REQUEST['phone'];
$e= $_REQUEST['city'];
$f = $_REQUEST['state'];
$g = $_REQUEST['country'];
$h = $_REQUEST['add'];
$i = $_REQUEST['id'];

if($a==null || $b==null || $d==null || $e==null || $f==null || $g==null || $h==null || $i==null)
{
	
	
	$r["res"] = "Fill all the fields";
	print(json_encode($r));
	
}
else
{
	
	$sql ="UPDATE `usereg` SET `name`='$a',`email`='$b',`phone`='$d',`city`='$e',`state`='$f',`country`='$g',`addr`='$h' where `id`='$i'";
	$s = mysqli_query($conn,$sql);
	
	if(!$s)
                {
	
                	$re["res"]="updating fail";
                	print(json_encode($re));
                }
                else
                {
                 	$re["res"]="updating success";
	print(json_encode($re));	
	}
}
?>