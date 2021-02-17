<?
include("common.php");

$postid=$_POST['postid'];

$dated=date("mdyHis");

$audiid="audio".$dated;

if(isset($_POST['url']))
{
$url=$_POST['url'];
}
else
{
$url='';
}

$image1=trim($_FILES['userfile']['name']);

$imagetype=$_FILES['userfile']['type'];

if($image1!='')
{
$image2=basename($image1);
$imagetemp=$_FILES['userfile']['tmp_name'];
$imagepath="insertaudio/$image2";

move_uploaded_file($imagetemp,$imagepath);


}
else
{
$image1='';
}

$sq="insert into postaudiourl (postid,audioid,url,audionew) value ('$postid','$audiid','$image1','$url')";

$qry=mysql_query($sq);

echo $sq;
echo "<script>window.close()</script>";

?>