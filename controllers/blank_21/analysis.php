<?php
// 
//
if (isset($_POST['add']))
{
  $sid = $_POST['sid'];
   foreach($_POST as $key => $value) {

      if ($key != 'sid' && $key != 'add') {
      
      $sql = "INSERT INTO access(sick_id, analisys) 
                          VALUES('$sid', '$key')";
      
      query($sql);
    }
   }

   header('location: index.php?option=edit&id=$sid');
}