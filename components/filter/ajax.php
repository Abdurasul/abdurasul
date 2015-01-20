<?php
$conn = mysql_connect('localhost', 'root', '');
$ok = mysql_select_db('medicine', $conn);

if (isset($_GET['id']))
	$id = $_GET['id'];
	
$sql = "SELECT * FROM cities WHERE id_viloyat='$id'";
$res = mysql_query($sql);

while ($row = mysql_fetch_object($res))
	$result[] = $row;
	
echo json_encode($result);

?>