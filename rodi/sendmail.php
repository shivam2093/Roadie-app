<?php


$a = $_REQUEST['email'];
$b = $_REQUEST['pass'];

if($a == null || $b == null){

}
else{

$subject="Forgot Password";
$message= "Your password is '$b'";
$frm="from:sevice@service.com";

$x= mail($a,$subject,$message, $frm);
if( $x)
{
 echo "sent";
}
else
{
echo "error";
}
}
?>