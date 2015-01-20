<?php
// 
//
if (isset($_POST['add']))
{
    $sid = $_POST['sid'];
    $etwas = $_POST['etwas'];
    $meer = $_POST['meer'];
    $natija = $_POST['natija'];
    $sana = $_POST['sana'];

    $sql = "INSERT INTO radiologi1 (etwas, meer, natija, sana, sid)
    					VALUES ('$etwas', '$meer', '$natija', '$sana', '$sid')";
    $res =  query($sql);
}
   if ($res)
   header('location: index.php?option=edit&id=$sid');