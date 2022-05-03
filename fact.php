<?php 
include("dao.php");
?>
<?php 
if(isset($_POST['submit']) && isset($_FILES['profile_name']))
{
	// echo "<pre>";
	// echo print_r( $_FILES['profile_name']);
	// echo "<pre>";
	$file=$_FILES['profile_name'];
	$name=$file['name'];
	$type=$file['type'];
	$size=$file['size'];
	$error=$file['error'];
	$tmp_name=$file['tmp_name'];
	if($error==0)
	{
		if($size>1250000)
		{
	    	$ext=pathinfo($name,PATHINFO_EXTENTION);
			$ext_l=strtolower($ext);
			$new_name=uniqid("img :",true).".".$ext_l;
			$path='upload/'.$new_name;
			$upload=uploadFile($new_name);
			if(uploadFile($new_name))
			{
				if(move_uploaded_file($tmp_name,$path))
				{
					header("location:welcome.php");
				}
            }
            else{echo "canot upload image";
             }
		}
		else{echo "it is maximum size of image";
	       }
	   }
	else{
		echo " something wrong ";
	  }
	}

function getImg(){
$img=getFiles();
return $img;
}

?>