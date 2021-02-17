<?php
require("common.php");
ob_start();
session_start();
$option=$_GET['option'];
$db = Database::getConnection();
if($option!='checkuser')
{
	header("location:index.php");
}
if($option=='checkuser')
{
	$user=$_POST['userid'];
	$password=md5($_POST['password']);
	$sq="select * from user_table where BINARY user_email='".trim($user)."' and BINARY password='".trim($password)."' and BINARY user_type='admin'";
	$msq=mysqli_query($db,$sq);
	$mfa=mysqli_fetch_array($msq);
	
	if($mfa)
	{
		//print_r($mfa);
	//die();
		$_SESSION['uname']=$mfa['user_email'];
		//echo $_SESSION['uname'];
		//die();
		header("location:admin.php");
	}
	if(!$mfa)
	{
		header("location:index.php?check=invaliduser");
	}
}
?>
