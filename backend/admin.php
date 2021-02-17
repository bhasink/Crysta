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

<style>
.testbutton {
  font-family: helvetica;
  color: #061221 !important;
  font-size: 14px;
  text-shadow: 1px 1px 0px #1C0702;
  box-shadow: 1px 1px 1px #94B0C2;
  padding: 5px 10px;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  border-radius: 5px;
  border: 2px solid #A39486;
  background: #363230;
  background: linear-gradient(top,  #EECF9F,  #E6EE77);
  background: -ms-linear-gradient(top,  #EECF9F,  #E6EE77);
  background: -webkit-gradient(linear, left top, left bottom, from(#EECF9F), to(#E6EE77));
  background: -moz-linear-gradient(top,  #EECF9F,  #E6EE77);
}
.testbutton:hover {
  color: #6A5E59 !important;
  background: #CF78CF;
  background: linear-gradient(top,  #CF9482,  #EEBC91);
  background: -ms-linear-gradient(top,  #CF9482,  #EEBC91);
  background: -webkit-gradient(linear, left top, left bottom, from(#CF9482), to(#EEBC91));
  background: -moz-linear-gradient(top,  #CF9482,  #EEBC91);
}


</style>
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>

<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #914b90;
  color: white;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <script src="js/index.js"></script>

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
