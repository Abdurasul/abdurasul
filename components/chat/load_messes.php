<?php

$conn = mysql_connect('localhost', 'root', '');
$db = mysql_select_db('medicine', $conn);
mysql_query('SET NAMES utf-8');

$res = mysql_query("SELECT * FROM `messages` ORDER BY `id` ");
//Выводим все сообщения на экран
while($d=mysql_fetch_array($res))
{   
    echo "<b><font color='orange'>".$d['login'].":&nbsp;</font></b>".$d['message']."<br>";
}

?>