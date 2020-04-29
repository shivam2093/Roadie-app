<?php

include "conn.php";

$a = $_REQUEST['name'];
$b = $_REQUEST['email'];
$c = $_REQUEST['pass'];
$d = $_REQUEST['phone'];
$e= $_REQUEST['city'];
$f = $_REQUEST['state'];
$g = $_REQUEST['country'];
$h = $_REQUEST['add'];		


 if($a==null || $b==null || $c==null || $d==null || $e==null || $f==null || $g==null || $h==null)
{
	
	
	$r["res"] = "Fill all the fields";
	print(json_encode($r));
	
}


   else
     {
           $i=mysqli_query($conn,"select * from usereg where email='$b'");
           $check='';
          while($row = mysqli_fetch_array($i))
            {
  
                  $check=$row['email'];

             }

           
         if($check==NULL)
           {

  			$sql = "INSERT INTO `usereg`( `name`, `email`, `pass`, `phone`,`city`,`state`,`country`, `addr`) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h')";
	
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
            else
             {

                 $r["re"]="Record is repeated";
                 print(json_encode($r));
                 die('Could not connect: ' . mysql_error());


                }
        } 


               
    ?> 
