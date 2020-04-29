<?php

include "conn.php";

$a = $_REQUEST['uid'];
$b = $_REQUEST['spid'];

if($a == null ||$b == null){

$r["res"] = "fill all the fields";
print(json_encode($r));
}
else{

$sql = "INSERT INTO `myfav`(`uid`, `spid`) VALUES ('$a','$b')";
$q=mysqli_query($conn,$sql);
if(!$q){
$r["res"] = "inserting problem";
print(json_encode($r));

}else{

$r["res"] = "inserting success";
print(json_encode($r));
}


}

?>