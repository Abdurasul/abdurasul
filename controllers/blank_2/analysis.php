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
	
   $sql = "INSERT INTO patologi(".$t.") VALUES (".$v.")";
   
   //echo $sql;
   $result = query($sql);
	
	if ($result) 
		header('location: index.php?option=viewAll');
}