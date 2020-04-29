<?php

include "conn.php";

$a = $_REQUEST['uid'];
$b = $_REQUEST['desc'];
$c = $_REQUEST['tcity'];
$d = $_REQUEST['tstate'];
$e= $_REQUEST['tcon'];
$f = $_REQUEST['tadd'];
$g = $_REQUEST['fcity'];
$h = $_REQUEST['fstate'];
$i = $_REQUEST['fcon'];
$j = $_REQUEST['fadd'];
$k = $_REQUEST['date'];
$l = $_REQUEST['time'];

if($a==null || $b==null || $c==null || $d==null || $e==null || $f==null || $g==null || $h==null || $i==null || $j==null || $k==null || $l==null)
{
	
	
	$r["res"] = "Fill all the fields";
	print(json_encode($r));
	
}
else
{
	
	$sql = "INSERT INTO `useraddreq`(`userid`, `Description`, `To_City`, `To_State`, `To_Country`, `To_Address`, `From_City`, `From_State`, `From_Country`, `From_Address`, `date`, `time`) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l')";
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