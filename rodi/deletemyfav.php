<?php

include "conn.php";


$b = $_REQUEST['spid'];

if($b == null){

$r["res"] = "fill all the fields";
print(json_encode($r));
}
else{

$sql = "delete from `myfav` where myid='$b'";
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