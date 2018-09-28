<?php
require ('data.php') ;
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	
 	<style type="text/css">
 		.a{
 			border: solid;
 			margin: 20px;
 			background: black;
 			color: yellow;

 		}
 		.b{
 			border: solid;
 			margin: 20px;
 			background: black;
 			color: yellow;
 		}
 		.c{
 			margin: 20px;
 		}
 	</style>
 </head>
 <body>

 <form class="c">
 	<input type="txt" name="id">
 	<input type="submit" value="Tim kiem">
 </form>

<?php
if (empty($_GET['id']))
 {
 	echo "Moi Ban Nhap Id Can tim : ";
 } 
 else
 {
 	$a = $_GET['id'];
 	$temp = 0;
 	$x = 0;
 	for ($i=0; $i < 5; $i++) { 
 		if ($users[$i]['id']==$a) {
 			$temp ++;
 			$x = $i;
 		}	

 	}

 		if ($temp == 1) {
 			echo "id ban tim ten : ";
 			echo $users[$x]['name'];
 		}
 		else
 		{
 			echo "users khong ton tai ";
 		}
 }
 ?>


 <table class="b">
 	<tr >
 		<th>STT</th>
 		<th>Name</th>
 		<th>ID</th>
 		<th>Gmail</th>
 		<th>Yahoo</th>
 	</tr>
 	<?php
 	for ($i=0; $i <5 ; $i++) { 
 	 	?>
 	 	<tr>
 	 		<!--STT-->
 	 		<td>
 	 			<?php
 	 			echo $h++; 
 	 			 ?>
 	 		</td>

 	 		<!--Name-->
 	 		<td>
 	 			<?php
 	 			echo $users[$i] ['name'];
 	 			 ?>
 	 		</td>

 	 		<!--Id-->
 	 		<td>
 	 			<?php
 	 			echo $users[$i]['id']; 
 	 			 ?>
 	 		</td>

 	 		<!--Gmail-->
 	 		<td>
 	 			<?php
 	 			echo $users[$i]['email']['gmail']; 
 	 			 ?>
 	 		</td>

 	 		<!--Yahoo-->
 	 		<td>
 	 			<?php
 	 			echo $users[$i]['email']['yahoo']; 
 	 			 ?>
 	 		</td>
 	 	</tr>
 	 	<?php
 	 } 
 	   ?>
 	 
 </table>


<!-- tim kiem id = 15-->
   <?php
      
            $tr =0;
            for ($i=0; $i <5 ; $i++) {
              for ($j=$i+1; $j <5 ; $j++) {

                       if ($users[$i]['id'] > $users[$j]['id']) {
                        $tr=$users[$i];
                        $users[$i]=$users[$j];
                        $users[$j]=$tr;
                        }
                  }

            } 
        ?>
<table class="a">
		<tr >
 		<th>STT</th>
 		<th>Name</th>
 		<th>ID</th>
 		<th>Gmail</th>
 		<th>Yahoo</th>
 	</tr>
 	<?php
 	for ($i=0; $i <5 ; $i++) { 
 	 	?>
 	 	<tr>
 	 		<!--STT-->
 	 		<td>
 	 			<?php
 	 			echo $h++; 
 	 			 ?>
 	 		</td>

 	 		<!--Name-->
 	 		<td>
 	 			<?php
 	 			echo $users[$i] ['name'];
 	 			 ?>
 	 		</td>

 	 		<!--Id-->
 	 		<td>
 	 			<?php
 	 			echo $users[$i]['id']; 
 	 			 ?>
 	 		</td>

 	 		<!--Gmail-->
 	 		<td>
 	 			<?php
 	 			echo $users[$i]['email']['gmail']; 
 	 			 ?>
 	 		</td>

 	 		<!--Yahoo-->
 	 		<td>
 	 			<?php
 	 			echo $users[$i]['email']['yahoo']; 
 	 			 ?>
 	 		</td>
 	 	</tr>
 	 	<?php
 	 } 
 	   ?>

</table>
<?php
	$temp =0;
	$a =0;
	for ($i=0; $i < 5; $i++) { 
		if ($users[$i]['id']==15) {
	 	$temp++;
	 	$a=$i;
	 } 
	}
		if ($temp==1)
		 {
				echo "id co ton tai";
				echo $users[$i]['name'];
		}	

		else
		{
			echo "id khong ton tai";
		}
 ?>
 </body>
 </html>