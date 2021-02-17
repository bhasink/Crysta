<button id="btnExport" class="testbutton">Export Data</button>
<div id="table_wrapper">
<?php 
$aVar = mysqli_connect("localhost","qprgjmajdd","hbm2YFApCn","qprgjmajdd");
 


	if($_REQUEST['task']=='delete')
	{
	  $id= $_REQUEST['id'];
	   $query ="delete from  omaxe_r2 WHERE id ='$id'"; 
	   $result=mysqli_query($aVar,$query);
	   header("location:admin.php");
	} 	

	
	
?>
<script> 
function submit_filter_data()
 {
   document.getElementById("filterform").submit();
 }
</script>
<table height="auto" style="width: 100%; border: 1px solid yellow; margin-top: 35px; font-family: Arial, Helvetica, sans-serif;
 font-size: 13px; padding: 15px;" id="customers">

<form method="post" name="filterform" id="filterform">
<tr>
<td colspan="2"> <h2> Enquiry Detail  </h2> </td>

		
	</tr> 
	
</form>
	
	<tr>
<td colspan="4"> &nbsp </td>
		
	</tr>

	<tr>
		<th> Sl. No.</th>
		<th> First Name</th>
		<th> Last Name</th>
		<th> Email</th>
		<th> Phone</th>
		<th> Query </th>
		<th> Organization </th>
		<th> Department / Affiliation</th>
		<th> City</th>
		<th> Message </th>
        <th> Date </th>
		<th>Action</th>
		
	
		
	</tr>
	
	<?php 
          
		 $sql="SELECT * from omaxe_r2 order by id desc ";
		  
		
          $result=mysqli_query($aVar,$sql);
	     $i=1;
	      //$num_rows = mysqli_num_rows($result);
	      //$records=mysqli_fetch_row($result);
	      while ($row = $result->fetch_assoc()) {

//print_r($row);
 		?>
		
		
 			<tr style="margin-top:15px;">
			<td align="center"><?php echo $i; ?></td>
			<td align="center"><?php echo $row['username']; ?></td>
			<td align="center"><?php echo $row['about']; ?></td>
			<td align="center"><?php echo $row['user_email']; ?></td>
			<td align="center"><?php echo $row['mobile']; ?></td>
			<td align="center"><?php echo $row['subject']; ?></td>
			<td align="center"><?php echo $row['sex']; ?></td>
			<td align="center"><?php echo $row['child']; ?></td>
			<td align="center"><?php echo $row['appointdate']; ?></td>
			<td align="center"><?php echo $row['message']; ?></td>
            <td align="center"><?php echo $row['date']; ?></td>
			<td align="center"><span><a href="admin.php?task=delete&id=<?php echo $row['id']; ?>">Delete</a></span></td>
			
			
			</tr>	
		<?php $i++; }
	      
?> 
	
</table></div>