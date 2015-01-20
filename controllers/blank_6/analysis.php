<?php
// 
//
if (isset($_POST['add']))
{
    $tahlil = $_POST['tahlil'];
	$baDuhtur = $_POST['baDuhtur'];
	$d1 = $_POST['d1'];
	$d2 = $_POST['d2'];
	$sid = $_POST['sid'];
	$Duhtur = $_POST['Duhtur'];
	$data = date('Y-m-d');
	
	$sql = "INSERT INTO ozmoishikliniki(tahlil, baDuhtur, d1, d2, sid, Duhtur, data)
						VALUES('$tahlil', '$baDuhtur', '$d1', '$d2', '$sid', '$Duhtur', '$data')";
	//echo $sql;
	$result = query($sql);
	
	if ($result) 
		header('location: index.php?option=viewAll');
}