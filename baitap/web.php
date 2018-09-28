<?php
require('data.php'); 
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Tim Kiem</title>
 </head>
 <body>
 	<!-- tao Form-->
 	<form action="#">
 		<input type="text" name="id">
 		<input type="submit" value="Tim Kiem">
 	</form>

 	<!-- Thuc Hien-->
 	<?php
 	if (empty($_GET['id'])) 
 	{
 	 	echo "Moi ban nhap ID can tim :";
 	 } 
 	else
 	{
 		$gtri = $_GET['id'];
 		$temp = 0;
 		$x =0;
 		for ($i=0; $i <5 ; $i++) 
 		{ 
 			if ($users[$i][id]==$gtri) 
 			{
 				$temp++;
 				$x = $i;
 			}
 		}
 		if ($temp ==1)
 		 {
 			echo "Id ban vua nhap co ten : ";
 			echo $users[$x]['name'];
 		}
 		else
 		{
 			echo "ID ban nhap khong ton tai : ";
 		}
 	}
 	 ?>


 	 <!--Tim Kiem ID-->
 	 <!--draw table-->
 	 <table>
 	 	<tr>
 	 		<td>STT</td>
 	 		<td>ID</td>
 	 		<td>Name</td>
 	 		<td>Gmail</td>
 	 		<td>Yahoo</td>
 	 	</tr>
 	 	<?php
 	 	for ($i=0; $i < 5 ; $i++) { 
 	 	?>
		<tr>
			<td>
				<?php echo $j++ ?>
			</td>

			<td>
				<?php echo $users[$i]['id']; ?>
			</td>

			<td>
				<?php echo $users[$i]['name']; ?>
			</td>

			<td>
				<?php echo $users[$i]['email']['gmail']; ?>
			</td>

			<td>
				<?php echo $users[$i]['email'][' yahoo'] ?>
			</td>
		</tr>
 	 	 	<?php
 	 	 	} 
 	 	 	 ?>
 	 	  	 </table>

 	 	  	 <!--tim ID so 15-->
 	 	  	 <?php
 	 	  	 $temp =0;
 	 	  	 $a=0;
 	 	  	 for ($i=0; $i <5 ; $i++)
 	 	  	  { 
 	 	  	  	if ($users[$i]['id']==15)
 	 	  	  	 {
 	 	  	  		$temp++;
 	 	  	  		$a = $i;
 	 	  	  	}
 	 	  	  } 
 	 	  	  if ($temp==1) {
 	 	  	  	echo "ID ton tai !!";
 	 	  	  	echo $users[$a]['name'];
 	 	  	  }
 	 	  	  else 
 	 	  	  {
 	 	  	  	echo "ID khong ton tai !!";
 	 	  	  }

 	 	  	  ?>
 	 	  	  <!-- ham sx-->
 	 	  	  <?php
	 	  	   $tr =0;
        		for ($i=0; $i <5 ; $i++) {
     		     for ($j=$i+1; $j <5 ; $j++)
     		      {

                   if ($users[$i]['id'] > $users[$j]['id']) {
                    $tr=$users[$i];
                    $users[$i]=$users[$j];
                    $users[$j]=$tr;
                          
                    }
              }

        }  
 	 	  	   ?>

 	 	  	   <!--ke lai bang-->
 	 	  	    <table>
 	 	<tr>
 	 		<td>STT</td>
 	 		<td>ID</td>
 	 		<td>Name</td>
 	 		<td>Gmail</td>
 	 		<td>Yahoo</td>
 	 	</tr>
 	 	<?php
 	 	for ($i=0; $i < 5 ; $i++) { 
 	 	?>
		<tr>
			<td>
				<?php echo $j++ ?>
			</td>

			<td>
				<?php echo $users[$i]['id']; ?>
			</td>

			<td>
				<?php echo $users[$i]['name']; ?>
			</td>

			<td>
				<?php echo $users[$i]['email']['gmail']; ?>
			</td>

			<td>
				<?php echo $users[$i]['email'][' yahoo'] ?>
			</td>
		</tr>
 	 	 	<?php
 	 	 	} 
 	 	 	 ?>
 	 	  	 </table>
 </body>
 </html>