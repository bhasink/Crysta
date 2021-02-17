<?php 
if ( !defined('ABSPATH') )
	define('ABSPATH', $_SERVER['DOCUMENT_ROOT']."/backend/");
include_once(ABSPATH."common.php");
//die(ABSPATH."common.php");
//$con=$database->connect();
//print_r($db);
class sqlclass{
	//private $sql;
	public function check_duplicate_reocrd($table_name,$field_name,$values){
		if($table_name!='' && $field_name!='' && $values!=''){
			$sql="select ID, $field_name from $table_name where $field_name='$values' and user_type!='admin'";
			//$db = new sqlclass();
			///return $sqlclass;
			$db = Database::getConnection();
			$result=mysqli_query($db,$sql);
			$num_rows = mysqli_num_rows($result);
			if ($num_rows!=1) {
				//return false;
				session_start();
				//$entry_datetime=date(); 	
				$data_values=array('user_name'=>$_SESSION['user_name'],'user_email'=>$_SESSION['user_email'],
				'user_type'=>'user');
				mysqli_query($db,$this->db_build_insert($table_name,$data_values));
				$user_id = mysqli_insert_id($db);
				
				$table_name='user_upload_image_gallery';
			
				$records=mysqli_fetch_row($result);
				$data_values=array('user_ID'=>$user_id,'user_name'=>$_SESSION['user_name'],'user_email'=>$_SESSION['user_email'],
				'status'=>'0');
				mysqli_query($db,$this->db_build_insert($table_name,$data_values));
				$upload_user_image_ID = mysqli_insert_id($db);
				
				$table_name="";
				$data_values="";
				$table_name='upload_images_gallery';
				//$file_name_path=str_replace($_SERVER['DOCUMENT_ROOT']."/bigestcheersever/","",$_SESSION['path_of_uploaded_file']);
				$image_name=explode('/',$_SESSION['path_of_uploaded_file']);
				//print_r($image_name);
				//die();
				$data_values=array('user_upload_image_gallery_Id'=>$upload_user_image_ID,'image_name'=>$image_name[count($image_name)-1],'image_path'=>$_SESSION['path_of_uploaded_file'],
				'status'=>'0','user_Id'=>$user_id);
				mysqli_query($db,$this->db_build_insert($table_name,$data_values));
				
			}else{
				$table_name='user_upload_image_gallery';
				$records=mysqli_fetch_row($result);
				if($this->check_email($table_name,'user_email',$_SESSION['user_email'])==''){
					$records=mysqli_fetch_row($result);
					$data_values=array('user_ID'=>$records[0],'user_name'=>$_SESSION['user_name'],'user_email'=>$_SESSION['user_email'],
					'status'=>'0');
					mysqli_query($db,$this->db_build_insert($table_name,$data_values));
					$upload_user_image_ID = mysqli_insert_id($db);
				}else{
					$upload_user_image_ID=$this->check_email($table_name,'user_email',$_SESSION['user_email']);
				}
				
				$table_name="";
				$data_values="";
				$table_name='upload_images_gallery';
				$file_name_path=str_replace($_SERVER['DOCUMENT_ROOT']."/","",$_SESSION['path_of_uploaded_file']);
				$image_name=explode('/',$file_name_path);
				$data_values=array('user_upload_image_gallery_Id'=>$upload_user_image_ID,'image_name'=>$image_name[count($image_name)-1],'image_path'=>$_SESSION['path_of_uploaded_file'],
				'status'=>'0','user_Id'=>$records[0]);
				mysqli_query($db,$this->db_build_insert($table_name,$data_values));
				
			  //print_r($records);
			}
		}
	}
	
	public function db_build_insert($table,$array){
		   //$db = Database::getConnection();
		   $str = "insert into $table ";
		   $strn = "(";
		   $strv = " VALUES (";
		   while(list($name,$value) = each($array)) {
			   if(is_bool($value)) {
						$strn .= "$name,";
						$strv .= ($value ? "true":"false") . ",";
						continue;
				};

			   if(is_string($value)) {
						$strn .= "$name,";
						$strv .= "'$value',";
						continue;
				}
			   if (!is_null($value) and ($value != "")) {
						$strn .= "$name,";
						$strv .= "$value,";
						continue;
			   }
		   }
		   $strn[strlen($strn)-1] = ')';
		   $strv[strlen($strv)-1] = ')';
		   $str .= $strn . $strv;
		   return $str;
		   //mysqli_query($db, $str);
		  
	}
	
	function check_email($table,$field,$values){
		if($table!='' && $field!='' && $values!=''){
			$sql="select ID, $field from $table where $field='$values'";
			//$db = new sqlclass();
			///return $sqlclass;
			$db = Database::getConnection();
			$result=mysqli_query($db,$sql);
			$records=mysqli_fetch_row($result);
			$num_rows = mysqli_num_rows($result);
			//echo $num_rows;
			//die();
			if ($num_rows>=1) {
				return $records[0];
			}else{
				return " ";
			}
		}
	}
	public function get_total_active_diactive_images($value){
		If($value!=''){
		 	$sql="SELECT user_upload_image_gallery_Id, image_name, image_path FROM `user_upload_image_gallery` INNER JOIN upload_images_gallery ON user_upload_image_gallery.ID = upload_images_gallery.user_upload_image_gallery_Id where upload_images_gallery.user_upload_image_gallery_Id=$value GROUP BY upload_images_gallery.user_upload_image_gallery_Id ";
			$db = Database::getConnection();
			$result=mysqli_query($db,$sql);
			//$records=mysqli_fetch_row($result);
			$num_rows = mysqli_num_rows($result);
			if ($num_rows>1) {
			 return "Total Number of Upload Images:$num_rows";
			}else{
			 return "$sql";
			}	
		}
	}
}
?>