<?php

include "conn.php";

$j=$_REQUEST['uid'];
$a = $_REQUEST['discription'];
$b = $_REQUEST['tocity'];
$c = $_REQUEST['tostate'];
$d = $_REQUEST['tocountry'];
$e= $_REQUEST['toadd'];
$f= $_REQUEST['fmcity'];
$g = $_REQUEST['fmstate'];
$h = $_REQUEST['fmcountry'];
$i = $_REQUEST['fmadd'];


if($a==null || $b==null || $c==null || $d==null || $e==null || $f==null || $g==null || $h==null ||  $i==null || $j==null)
{
	
	
	$r["res"] = "Fill all the fields";
	print(json_encode($r));
	
}
else
{
	
	$sql = "INSERT INTO `useraddreq`(`userid`,`Description`, `To_City`, `To_State`, `To_Country`, `To_Address`, `From_City`, `From_State`, `From_Country`, `From_Address`) VALUES  ('$j','$a','$b','$c','$d','$e','$f','$g','$h','$i')";
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