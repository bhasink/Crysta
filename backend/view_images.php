<?
require("session_check.php");
include_once("common_function.php");
$db = Database::getConnection(); 
$pid = $_REQUEST['user_id'];
if($_REQUEST['d_id']!='')
{
	$did = $_REQUEST['d_id']; 
	$pid= $_REQUEST['pid'];
	$getdata = "SELECT image_name from upload_images_gallery WHERE id ='$did' ";
	$getresdata = mysqli_query($db,$getdata);
	$getdataresult = mysqli_fetch_object($getresdata);
	$imgname =  $getdataresult->image_name;
	unlink("../images/slider/$imgname");
	
	$query = "DELETE from upload_images_gallery WHERE id ='$did'";
	$result=mysqli_query($db,$query);
	header("location:view_images.php?user_id=".$pid);
}


if($_REQUEST['task']=='active')
	{
	   $id= $_REQUEST['id'];
	   $pid = $_REQUEST['pid'];
	   $query ="UPDATE upload_images_gallery set status ='1' WHERE id ='$id'"; 
	   $result=mysqli_query($db,$query);
	   if($result)
	   {
	   $userdata = "SELECT upload_images_gallery.*,user_table.user_name,user_table.user_email from upload_images_gallery 
		       join user_table on user_table.id = upload_images_gallery.user_Id  WHERE upload_images_gallery.id ='$id'";
		$getdata = mysqli_query($db,$userdata);
	   $userrecords = mysqli_fetch_array($getdata);
	   $name = ucwords($userrecords['user_name']);
	   $email= $userrecords['user_email'];
	   $filename = $userrecords['image_name'];
	   $to = "$email";
	   $subject = "Account Activation message";
	   $message = "<table cellpadding='0' cellspacing='0'>
	 <tr>
    <td align='center' valign='top'>Dear $name </td>
  </tr>
  <tr>
    <td align='center'>
	<a href='http://biggestcheersever.com/review_images.php?img=$filename'>
	<img src='http://wordpress.csipl.net/biggestcheers/images/Biggest.jpg' /  > </a>
	</td>
  </tr>
 </table>";
 $headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
// Additional headers
//$headers .= 'To: Mary <hridesh.srivastava@csipl.net>, Kelly <abhishek.srivastava@csipl.net>' . "\r\n";
$headers .= 'From:  <beercafe@biggestcheersever.com>' . "\r\n";

// Mail it
mail($to, $subject, $message, $headers);

 
 
	   }
	   
	   
	   
	   
	header("location:view_images.php?user_id=".$pid);
	} 
if($_REQUEST['task']=='deactive')
	{
	   $id= $_REQUEST['id'];
	   $pid = $_REQUEST['pid'];
	   $query ="UPDATE upload_images_gallery set status ='0' WHERE id ='$id'"; 
	   $result=mysqli_query($db,$query);
	   header("location:view_images.php?user_id=".$pid);
	} 	

	if($_REQUEST['task']=='delete')
	{
	   $id= $_REQUEST['id'];
	   $pid = $_REQUEST['pid'];
	   $query ="delete from  user_table WHERE id ='$id'"; 
	   $result=mysqli_query($db,$query);
	   header("location:view_images.php?user_id=".$pid);
	} 	




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
		  <div class="right-part">
		   <div> <a href="admin.php"> Back </a>   </div>
		  <table height="auto" style="width: 100%; border: 1px solid yellow; margin-top: 35px;">
		  
		  
	<tr>
		<td>Sl. No.</td>
		<td> Image</td>
	
		<td>Action</td>
		
		
	</tr>
	
	<?php 
 //die($sql);
		     $sql="SELECT upload_images_gallery.*,user_table.user_name from upload_images_gallery 
		       join user_table on user_table.id = upload_images_gallery.user_Id 	
			   WHERE upload_images_gallery.user_Id='$pid' order by upload_images_gallery.id desc"; 
              $result=mysqli_query($db,$sql);
				$i=1;
	      //$num_rows = mysqli_num_rows($result);
	      //$records=mysqli_fetch_row($result);
	      while ($row = $result->fetch_assoc()) {

//print_r($row);
 		?>
 			<tr>
			<td><?php echo $i; ?></td>
			<td> <image src="http://biggestcheersever.com/images/slider/<?php echo $row['image_name']; ?>" width="200" style="10 10 10 10px;"></td>
			<td><span><a href="view_images.php?d_id=<?php echo $row['ID']; ?>&pid=<?php echo $pid; ?>">Delete</a></span> </br>
			   
			   	<?php $status = $row['status'];
                  if($status=='0')
				  {					  
			?>
			  <a href="view_images.php?task=active&id=<?php echo $row['ID']; ?>&pid=<?php echo $pid; ?>">
			  <img src="images/deactivate_icon.gif">  </a>
			  
			    <?php }
                    else
					{	
				?>
				<a href="view_images.php?task=deactive&id=<?php echo $row['ID']; ?>&pid=<?php echo $pid; ?>">
				  <img src="images/active_icon.gif"> </a>
					<?php } ?>
			</td>
			
		
			</tr>	
		<?php $i++; }
	      
?> 
	
</table>
		  
		  </div>
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
