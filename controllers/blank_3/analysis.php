<?php
// 
//
if (isset($_POST['add']))
{
    $hunPeshAzNahori = $_POST['hunPeshAzNahori'];
	$SiMinBadiKabul = $_POST['SiMinBadiKabul'];
	$ShMinBadiKabul = $_POST['ShMinBadiKabul'];
	$NavMinBadiKabul = $_POST['NavMinBadiKabul'];
	$YbstMinBadiKabul = $_POST['YbstMinBadiKabul'];
	$sid = $_POST['sid'];
	$data = date('Y-m-d');
	$duhtur = $_POST['duhtur'];
	
	$sql = "INSERT tahliliKandiHun(sid, hunPeshAzNahori, SiMinBadiKabul, ShMinBadiKabul,NavMinBadiKabul, YbstMinBadiKabul, data, duhtur)
								VALUES('$sid', '$hunPeshAzNahori', '$SiMinBadiKabul', '$ShMinBadiKabul', '$NavMinBadiKabul', '$YbstMinBadiKabul', '$data', '$duhtur')";
	//echo $sql;
	$result = query($sql);
	
	if ($result) 
		header('location: index.php?option=viewAll');
}