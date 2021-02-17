<?
require("session_check.php");
require("common.php");
$blocked=$_GET['display'];
if($display=='no')
{
	$done="unblocked";
}
if($display=='yes')
{
	$done="blocked";
}

for($i=0;$i<count($check);$i++)
{
	$ms="update admininfo set blocked='$display' where id='$check[$i]' and mainadmin='no'";
	$msq=mysql_query($ms);
	//echo $ms;
}
if($msq)
{


		if(isset($_SESSION['lpage']))
		{
			$lpage=$_SESSION['lpage'];
		}
		else
		{
			$lpage="manageadmin.php";
		}
		?>
		<script>
        window.location="<?=$lpage?>";
        </script>
        <?
		exit();
}
else
{
		if(isset($_SESSION['lpage']))
		{
			$lpage=$_SESSION['lpage'];
		}
		else
		{
			$lpage="manageadmin.php";
		}
		?>
		<script>
        window.location="<?=$lpage?>";
        </script>
        <?
		exit();
}
?>

