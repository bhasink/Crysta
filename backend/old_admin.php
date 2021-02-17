<?
require("session_check.php");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Admin</title>
<style type="text/css">
body {
	margin-top: 0px;
	margin-bottom: 5px;
	background-image: url();
	background-color: #FFFFFF;
}
-->
</style><link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<table width="936" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="12" bgcolor="#FFFFFF"></td>
    <td width="912" valign="top"><div align="center">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td colspan="3" bgcolor="#FFFFFF" height="10"></td>
        </tr>
        <tr bgcolor="#FFFFFF" >
          <td colspan="3" background="images/logo.gif">
                  <? include ("topinner.php") ?>
				  </td>
          </tr>
        <tr>
          <td height="auto" colspan="3" bgcolor="#FFFFFF">
		  <div class="left-part">
			<?php ?>
		  </div>
		  <div class="right-part"><?php include_once('upload_all_images.php'); ?></div>
		  </td>
        </tr>
        <tr>
          <td colspan="3" bgcolor="#FFFFFF">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="3" bgcolor="#FFFFFF">&nbsp;</td>
        </tr>
        
        <tr>
          <td colspan="3" bgcolor="#FFFFFF">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="3" bgcolor="#FFFFFF">&nbsp;</td>
        </tr>
      </table>
    </div></td>
    <td width="12" bgcolor="#FFFFFF"></td>
  </tr>
  <tr>
    <td colspan="3"></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"></td>
    <td bgcolor="#FFFFFF"><div align="justify"><? include("bottom.html");?></div></td>
    <td bgcolor="#FFFFFF"></td>
  </tr>
</table>
</body>
</html>
