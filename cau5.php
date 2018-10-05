<?php 
include('./users.php');

$obj_users = new users();

$users = $obj_users->getUsers();
var_dump($users);
die();
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	
 </body>
 </html>