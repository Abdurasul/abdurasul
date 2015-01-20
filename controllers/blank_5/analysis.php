<?php
// 
//
if (isset($_POST['add']))
{
    $hujra = $_POST['hujra'];
	$guruhiHun = $_POST['guruhiHun'];
	$Rh = $_POST['Rh'];
	$duhtur = $_POST['duhtur'];
	$sid = $_POST['sid'];
	$data = date('Y-m-d');
	
	$sql = "INSERT INTO tahlilihun(hujra, guruhiHun, Rh, duhtur, sid, data)
						VALUES('$hujra', '$guruhiHun', '$Rh', '$duhtur', '$sid', '$data')";
	//echo $sql;
	$result = query($sql);
	
	if ($result) 
		header('location: index.php?option=viewAll');
}