<?php
// 
//
if (isset($_POST['add']))
{
    $sana = $_POST['sana'];
	$tashhis = $_POST['tashhis'];
	$HBsAq = $_POST['HBsAq'];
	$HCV = $_POST['HCV'];
	$HDVJqM = $_POST['HDVJqM'];
	$HbeAq = $_POST['HbeAq'];
	$HAVJgM = $_POST['HAVJgM'];
	$HEVJgM = $_POST['HEVJgM'];
	$HBcorJgM = $_POST['HBcorJgM'];
	$duhtur = $_POST['duhtur'];
	$sid = $_POST['sid'];
	
	$sql = "INSERT INTO virus(sana,tashhis,HBsAq, HCV, HDVJqM, HbeAq, HAVJgM, HEVJgM, HBcorJgM, duhtur, sid)
						VALUES('$sana', '$tashhis', '$HBsAq', '$HCV', '$HDVJqM', '$HbeAq', '$HAVJgM', '$HEVJgM', '$HBcorJgM', '$duhtur', '$sid')";
	//echo $sql;
	$result = query($sql);
	
	if ($result) 
		header('location: index.php?option=viewAll');
}