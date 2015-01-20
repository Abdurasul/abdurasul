<?php
// 
//
if (isset($_POST['add']))
{
    $sid = $_POST['sid'];
    $t3 = $_POST['t3'];
    $t4 = $_POST['t4'];
    $natija = $_POST['natija'];
    $ttg = $_POST['ttg'];

    $sql = "INSERT INTO radiologi2 (t3, t4, natija, ttg, sid)
    					VALUES ('$t3', '$t4', '$natija', '$ttg', '$sid')";
    $res =  query($sql);
}
   if ($res)
   header('location: index.php?option=edit&id=$sid');