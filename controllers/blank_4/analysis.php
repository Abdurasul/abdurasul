<?php
// 
//
if (isset($_POST['add']))
{
    $SanaiMavod = $_POST['SanaiMavod'];
	$Shuba = $_POST['Shuba'];
	$Hujra = $_POST['Hujra'];
	$Natija = $_POST['Natija'];
	$mochevina = $_POST['mochevina'];
	$kreatin = $_POST['kreatin'];
	$ostat = $_POST['ostat'];
	$sid = $_POST['sid'];
	$duhtur = $_POST['duhtur'];
	$data = date('Y-m-d');
	
	$sql = "INSERT INTO tahlilimochevinaihun(SanaiMavod, Shuba, Hujra, Natija, mochevina, kreatin, ostat, sid, duhtur, data)
									VALUES('$SanaiMavod', '$Shuba', '$Hujra', '$Natija', '$mochevina', '$kreatin', '$ostat', '$sid','$duhtur', '$data')";
	//echo $sql;
	$result = query($sql);
	
	if ($result) 
		header('location: index.php?option=viewAll');
}