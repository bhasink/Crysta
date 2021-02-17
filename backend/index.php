<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin</title>
<link href="control.css" rel="stylesheet" type="text/css" />
<style>
.valfrm {font-weight: 400; font-size: 10px; color: #ffffff; background-color: #CD0000; margin-left:5px; font-family: arial; text-decoration: none; text-align:left;}

.invLogin {font-weight: 700; font-size: 12px; color: #cd0000; font-family: arial; text-decoration: none; text-align:left;}

.form {
BACKGROUND-COLOR: #ecebeb; BORDER-BOTTOM: #abadb3 1px solid; BORDER-LEFT: #abadb3 1px solid; BORDER-RIGHT: #abadb3 1px solid; BORDER-TOP: #abadb3 1px solid; COLOR: #000000; FONT-FAMILY: Verdana; FONT-SIZE: 8pt;
}

.forminvalid {
BACKGROUND-COLOR: #FFBBBB; BORDER-BOTTOM: #FF8484 2px solid; BORDER-LEFT: #FF8484 2px solid; BORDER-RIGHT: #FF8484 2px solid; BORDER-TOP: #FF8484 2px solid; COLOR: #666666; FONT-FAMILY: Verdana; FONT-SIZE: 8pt;
}
</style>
<script type="text/javascript">
function chkvalue()
{
	var status=0;
	var msg="Following field(s) need to be filled:\n\n";
	if(document.frm.userid.value=="")
	{
		msg+="=>Username\n";
		document.getElementById("userid").className='forminvalid';
		status=1;
	}
	if(document.frm.userid.value!="")
	{
		document.getElementById("userid").className='form';
	}
	if(document.frm.password.value=="")
	{
		msg+="=>Password\n";
		document.getElementById("password").className='forminvalid';
		status=1;
	}
	if(document.frm.password.value!="")
	{
		document.getElementById("password").className='form';
	}
	if(status==1)
	{
		alert(msg);
		return false;
	}
}
</script>
</head>

<body>
<form name="frm" method="post" action="admincheck.php?option=checkuser" style="clear: both;" onSubmit="return chkvalue();">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center"><br><br>
      <br>
      <br><br><br><table width="350" border="0" align="center" cellpadding="0" cellspacing="0" class="mbor">
        <tr>
          <td width="346" align="left">
            <img src="images/tcor.gif" width="350" height="10" /></td>
        </tr>
        <tr>
          <td valign="top" class="mbor1"><table width="340" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td height="70" colspan="3" align="left" style="padding-left:15px;"><img src="../img/Crysta-logo.png"  width="150"/><br /></td>
            </tr>
			 <?
		  if(isset($_GET['check'])&&($_GET['check']=='invaliduser'))
		  {
		  ?>
            
             <tr>
               <td colspan="2" valign="top" class="text" style="padding-left:15px;">&nbsp;</td>
               <td width="233" height="5"  valign="top" class="invLogin" style="padding-left:20px;">&nbsp;</td>
             </tr>
             <tr>
			 <td colspan="2" valign="top" class="text" style="padding-left:15px;"><strong>Admin Login:</strong></td>
              <td  valign="top" height="5" class="invLogin" >Username and password do not match
         <br />Or , your account has been locked </td>
            </tr>
			  <?
		  }
		  else if(isset($_GET['action'])&&($_GET['action']=='logout'))
		  {
		  ?>
		      <tr>
		        <td colspan="2" valign="top" class="text" style="padding-left:15px;">&nbsp;</td>
		        <td  valign="top" height="5" class="invLogin" >&nbsp;</td>
		        </tr>
		      <tr>
			   <td colspan="2" valign="top" class="text" style="padding-left:15px;"><strong>Admin Login:</strong></td>
              <td  valign="top" height="5" class="invLogin" >You have successfully logged out</td>
            </tr>
			 <?
		  }
		  else
		  {
		  }
		  ?>
			
             <tr>
               <td width="76" class="text" style="padding-left:15px;">&nbsp;</td>
               <td width="31" class="text" style="padding-right:10px;">&nbsp;</td>
               <td align="left" valign="top">&nbsp;</td>
             </tr>
             <tr>
              <td class="text" style="padding-left:15px;">Useremail</td>
              <td class="text" style="padding-right:10px;">:</td>
              <td align="left" valign="top"><input name="userid" id="userid" type="text" class="form" size="25" maxlength="18" /><span id="alertMsguser" class="valfrm"></span></td>
            </tr>
            <tr>
              <td colspan="3" valign="top" height="8"></td>
            </tr>
            <tr>
              <td class="text" style="padding-left:15px;">Password</td>
              <td class="text">:</td>
              <td align="left" valign="top"><input name="password" type="password" id="password" class="form" size="25" value="" maxlength="12"><span id="alertMsgpass" class="valfrm"></span></td>
            </tr>
            <tr>
              <td colspan="3" valign="top" height="1"></td>
            </tr>
            <tr>
              <td height="25" align="center" valign="bottom" colspan="3"><input name="Submit2" type="submit" class="but1" value="     Login     " /></td>
            </tr>
            <tr>
              <td colspan="3" valign="top">&nbsp;</td>
            </tr>
          </table></td>
        </tr>
      <tr>
        <td valign="top"><img src="images/bcor.gif" width="350" height="25" /></td>
      </tr>
    </table></td>
  </tr>
</table>
</form>
</body>
</html>