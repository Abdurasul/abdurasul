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
   	   if ($i == count($items) - 2) {
   	   	    $t = $t.$items[$i];
   	   	  //  $v = $v."'".$values[$i]."'";
   	   	     $v = $v.'1';
   	   }
   	   else {
   	        $t = $t.$items[$i].','; 
   	    //    $v = $v."'".$values[$i]."',";
   	         $v = $v.'1,';
   	   }

   	  
   }


   /*INSERT INTO istoriya
(ruz_q, ruz_j, shuba, hujra, harorat, ba_shuba, ruz_b,guruh_hun,rezus_k,vazn,qad,ivb,tahammul,kor,ligot,badi,t_m_r,t_h_q,t_k,ruz_m,d1,d2,d3,miqdor,a1,a2,a3,a4,a5,a6,a7,a8,a9,a10,a11,a12,mu_ilova,b_o,b1,b2,b3,b4,b5,b6,b7,b8,b9,b10,b11,b12,hh2,h2,n2,t_sh,m_b,sid)
VALUES
('1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1','1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1','1','1','1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1','1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1','1','1')*/
   $sql = "INSERT INTO istoriya(".$t.") VALUES (".$v.")";
   //$sql = "UPDATE tahlilihun SET kassa='$values[0]' WHERE sid='$sid'";
   echo $sql;
   //query($sql);
   
   //$sql = "UPDATE tahlilikandihun SET kassa='$values[1]' WHERE sid='$sid'";
   //query($sql);
   
  //if ($result) 
		//header('location: index.php?option=viewAll');
}