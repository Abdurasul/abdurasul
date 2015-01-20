<?php
// 
//
if (isset($_POST['add']))
{
    foreach($_POST as $key=>$val) {
        $$key = $val;
        $items[] = $key;
	$values[] = $val;
    }
   for($i = 0; $i < count($items) - 1; $i++)
   {
   	   if ($i == count($items) - 2) {
   	   	    $t = $t.$items[$i];
   	   	    $v = $v."'".$values[$i]."'";
   	   }
   	   else {
   	        $t = $t.$items[$i].','; 
   	        $v = $v."'".$values[$i]."',";
   	   }
   }
   //$sql = "INSERT INTO patologi(".$t.") VALUES (".$v.")";
   $sql = "UPDATE tahlilihun SET kassa='$values[0]' WHERE sid='$sid'";
   query($sql);
   
   $sql = "UPDATE tahlilikandihun SET kassa='$values[1]' WHERE sid='$sid'";
   query($sql);
   
   $sql = "UPDATE tahlilimochevinaihun SET kassa='$values[2]' WHERE sid='$sid'";
   query($sql);
   
   $sql = "UPDATE ozmoishigohi_i SET kassa='$values[3]' WHERE sid='$sid'";
   query($sql);
   
   $sql = "UPDATE ozmoishikliniki SET kassa='$values[4]' WHERE sid='$sid'";
   query($sql);
   
   $sql = "UPDATE peshob SET kassa='$values[5]' WHERE sid='$sid'";
   query($sql);
   
   $sql = "UPDATE tahlilifazla SET kassa='$values[6]' WHERE sid='$sid'";
   query($sql);
   
   $sql = "UPDATE tahshisifarosadoi SET kassa='$values[7]' WHERE sid='$sid'";
   query($sql);
   
   $sql = "UPDATE lahtashaviihun SET kassa='$values[8]' WHERE sid='$sid'";
   query($sql);
   
   $sql = "UPDATE virus SET kassa='$values[9]' WHERE sid='$sid'";
   query($sql);

   //echo $sql;
   //echo $sql;
   $result = query($sql);
	
	if ($result) 
		header('location: index.php?option=viewAll');
}