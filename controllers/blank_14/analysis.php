<?php
// 
//
if (isset($_POST['add']))
{
    $sana = $_POST['sana'];
	$hujra = $_POST['hujra'];
	$mintaka = $_POST['mintaka'];
	$tarih = $_POST['tarih'];
	$holesterin = $_POST['holesterin'];
	$bilirubin = $_POST['bilirubin'];
	$b_p = $_POST['b_p'];
	$b_o = $_POST['b_o'];
	$reaksia = $_POST['reaksia'];
	$acat = $_POST['acat'];
	$alat = $_POST['alat'];
	$f_i = $_POST['f_i'];
	$m_s = $_POST['m_s'];
	$amilaza = $_POST['amilaza'];
	$almubin = $_POST['almubin'];
	$ggtp = $_POST['ggtp'];
	$sid = $_POST['sid'];
	$data = date('y-m-d');
	
	$sql = "INSERT INTO biokimievi(sana, hujra, mintaka, tarih, holesterin, bilirubin, b_p, b_o, reaksia, acat, alat, f_i, m_s, amilaza, almubin, ggtp, sid, data)
						VALUES('$sana', '$hujra', '$mintaka', '$tarih', '$holesterin', '$bilirubin', '$b_p', '$b_o', '$reaksia', '$acat', '$alat', '$f_i', '$m_s', '$amilaza', '$almubin', '$ggtp', '$sid', '$data')";
	
	//echo $sql;
	$result = query($sql);
	
	if ($result) 
		header('location: index.php?option=viewAll');
}