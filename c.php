<?php 
$conn=new mysqli("localhost","root","","image");
if($conn->connect_error){
	die("Error :".$conn->connect_error);

}
else{
	echo "connection database...";
}
?>