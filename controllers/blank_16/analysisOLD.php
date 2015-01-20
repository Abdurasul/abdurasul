<?php
// 
//
if (isset($_POST['add']))
{
    foreach($_POST as $key=>$val) {
        $$key = $val;
        if ($val == 'on') {
            $items[] = $key;
            $values[] = 1;
          }
        else {        
          $items[] = $key;
	        $values[] = $val;
       }
    }
   for($i = 0; $i < count($items) - 1; $i++)
   {
   	   /*if ($i == count($items) - 2) {
   	   	    $t = $t.$items[$i];
   	   	    $v = $v."'".$values[$i]."'";
   	   }
   	   else {
   	        $t = $t.$items[$i].','; 
   	        $v = $v."'".$values[$i]."',";
   	   }*/

       $v = $v."'1'";
   }


   echo $v;
   echo "<br>";
   $sql = "INSERT INTO istoriya(".$t.") VALUES (".$v.")";
   //$sql = "UPDATE tahlilihun SET kassa='$values[0]' WHERE sid='$sid'";
   //echo $sql;
   //query($sql);
   
   //$sql = "UPDATE tahlilikandihun SET kassa='$values[1]' WHERE sid='$sid'";
   //query($sql);
   
  //if ($result) 
		//header('location: index.php?option=viewAll');
}