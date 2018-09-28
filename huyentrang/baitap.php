<?php
require ('data.php');
?>


<!DOCTYPE html>

<html>
<head>
        <title>
                
        </title>
</head>
<body>
    <form>
        TIM KIEM <br>

        <input type="txt" name="id">
        <input type="submit" value="Tim kiem">
    </form>

            <?php
            if (empty($_GET['id']))echo "Moi ban nhap id can tim :";
            else{
                    $so =$_GET['id'];
                    $temp =0;
                    $x=0;
                    for ($i=0; $i < 5; $i++) 
                        if ($users[$i]['id']==$so)

                   {
                    $temp ++;
                    $x=$i;

                   }
               
          
                   if ($temp==1) 


                    {
                            echo "Tên : ";
                            echo $users[$x]['name'];

                    }
                    else
                    {
                            echo "users khong ton tai  ";

        
                    }
            
            }
                
        ?>






        <table border=solid>

                <tr>
                        <th>STT</th>
                        <th>Name</th>
                        <th>ID</th>
                        <th> Gmail</th>
                        <th>Yahoo</th>


                </tr>
              
                  <?php
                 for ($i=0; $i <5; $i++) { 
                     
                 
                                ?>
                                <tr>
                                        <td>
                                              <?php
                                              echo $h++;

                                              ?>
                                        </td>

                                        <td>
                                                <?php
                                                echo $users[$i]['name'];

                                                ?>
                                        </td>

                                           <td>
                                                <?php
                                                echo $users[$i]['id'];
                                                
                                                ?>
                                        </td>

                                         <td>
                                                <?php
                                                echo $users[$i]['email']['gmail'];
                                                
                                                ?>
                                        </td>
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
        <!-- tim id so 15-->
        <?php
        $temp =0;
        $a=0;
        for ($i=0; $i < 5; $i++) {
                if ($users[$i]['id']==15)

               {
                $temp ++;
                $a=$i;

               }
           }
      
               if ($temp==1) 


                {
                        echo "id co ton tai ";
                        echo $users[$a]['name'];

                }
                else
                {
                        echo "id khong ton tai ";
                }
                ?>


       
        <?php
      
            $tr =0;
            for ($i=0; $i <5 ; $i++) {
              for ($j=$i+1; $j <5 ; $j++) {

                       if ($users[$i]['id'] > $users[$j]['id']) {
                        $tr=$users[$i];
                        $users[$i]=$users[$j];
                        $users[$j]=$tr;
                               # code...
                        }
                  }

            } 
        ?>
  
                <table  width='100' border=solid >

                <tr>
                        <th>STT</th>
                        <th>Name</th>
                        <th>ID</th>
                        <th> Gmail</th>
                        <th>Yahoo</th>


                </tr>
                  <?php
                 for ($i=0; $i <5 ; $i++) { 
                                       
                                ?>
                                <tr>
                                        <td>
                                              <?php
                                              echo $k++;

                                              ?>
                                        </td>
                                        <td>
                                                <?php
   
                                             echo $users[$i]['name'];

                                                ?>
                                        </td>
                                           <td>
                                                <?php
                                                echo $users[$i]['id'];
                                                
                                                ?>
                                        </td>
                                         <td>
                                                <?php
                                                echo $users[$i]['email']['gmail'];
                                                
                                                ?>
                                        </td>
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
                        
</body>
</html>