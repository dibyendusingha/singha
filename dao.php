<?php 
include("c.php");
?>
<?php
function uploadFile($name){
	$conn=$GLOBALS['conn'];
	$sql="INSERT INTO `image` VALUES(null,?)";
	$sc=$conn->prepare($sql);
	$sc->bind_param("s",$name);
	if($sc->execute()){
		return true;
	}
	else{
		return false;
   }
}

function getFiles()
{	$conn=$GLOBALS['conn'];
	$sql="SELECT * FROM `image` WHERE 1";
	$result=$conn->query($sql);
	$img=array();
	if($result->num_rows >0)
	{
	while($row=$result->fetch_assoc())
		{
			$img[]=$row;
        }
	}
	return $img;
}
 ?>