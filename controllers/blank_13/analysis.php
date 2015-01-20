<?php
// 
//
if (isset($_POST['add']))
{
    $tarih = $_POST['tarih'];
	$tashhis = $_POST['tashhis'];
	$cd3 = $_POST['cd3'];
	$cd4 = $_POST['cd4'];
	$cd8 = $_POST['cd8'];
	$cd20 = $_POST['cd20'];
	$cd16 = $_POST['cd16'];
	$cd95 = $_POST['cd95'];
	$cd25 = $_POST['cd25'];
	$a = $_POST['a'];
	$m = $_POST['m'];
	$g = $_POST['g'];
	$natija = $_POST['natija'];
	$tahlil = $_POST['tahlil'];
	$sana = $_POST['sana'];
	$data = date('y-m-d');
	$sid = $_POST['sid'];
	
	$sql = "INSERT INTO ozmoishigohi_i(tarih, tashhis, cd3, cd4, cd8, cd20, cd16, cd95, cd25, a, m, g, natija, tahlil, sana, data, sid)
						VALUES('$tahlil', '$tashhis', '$cd3', '$cd4', '$cd8', '$cd20', '$cd16', '$cd95', '$cd25', '$a', '$m', '$g', '$natija', '$tahlil', '$sana', '$data', '$sid')";
	
	//echo $sql;
	$result = query($sql);
	
	if ($result) 
		header('location: index.php?option=viewAll');
}