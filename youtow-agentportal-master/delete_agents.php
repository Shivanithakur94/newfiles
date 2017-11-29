<?php 

require("db_connect.php");
//$usr = $_SESSION["currentUser"];
echo $del_user=$_POST['a'];
echo $flag_user=$_POST['flag'];
if($flag_user==0)
{
$del = "DELETE FROM users WHERE user_id='$del_user'";
$del1 = "DELETE FROM agents WHERE agent_id='$del_user'";
$del_res=$con->query($del);
$del_res1=$con->query($del1);
}
echo $sav_user=$_POST['r'];
echo $flag_users=$_POST['flags'];
echo $name_users=$_POST['nm'];
echo $phn_users=$_POST['ph'];
echo $pass_users=$_POST['ps'];
echo $addr_users=$_POST['ad'];
  if($flag_users==1)
{
	$save_users="UPDATE `users` SET `user_name`='$name_users',`user_password`='$pass_users',`user_phone`='$phn_users',`user_address`='$addr_users' WHERE user_id='$sav_user'";
	$con->query($save_users);
	
}  