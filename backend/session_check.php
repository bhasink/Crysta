<?php
ob_start();
	session_start();
	//echo $_SESSION['uname'];
	//die('test');
	//if(isset($HTTP_SESSION_VARS['username']))
	if(!isset($_SESSION['uname']))
	{
		header("location:index.php");
		exit;
	}
?>