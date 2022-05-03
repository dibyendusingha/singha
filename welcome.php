<?php 
include("fact.php");
?>
<?php

echo "<h1>  **  WELCOME  ** </h1>";

$f=getImg();

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title></title>
 </head>
 <body>
 	<?php foreach ($f as $a) { ?>

 		<img src="upload/ <?php echo $a['name'];?>" width="200">

 		
 <?php
  }
 ?>
 	
 
 </body>
 </html>