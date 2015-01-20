<?php
// 
//
if (isset($_POST['add']))
{
    $shuba = $_POST['shuba'];
	$hujra = $_POST['hujra'];
	$l_hun = $_POST['l_hun'];
	$v_p = $_POST['v_p'];
	$i_p = $_POST['i_p'];
	$fibrinogen = $_POST['fibrinogen'];
	$fibrin = $_POST['fibrin'];
	$fibrinogenB = $_POST['fibrinogenB'];
	$v_r = $_POST['v_r'];
	$trombotest = $_POST['trombotest'];
	$data = date('y-m-d');
	$sid = $_POST['sid'];
	
	$sql = "INSERT INTO lahtashaviihun(shuba, hujra, l_hun, v_p, i_p, fibrinogen, fibrin, fibrinogenB, v_r, trombotest, data, sid) 
					VALUES('$shuba', '$hujra', '$l_hun', '$v_p', '$i_p', '$fibrinogen', '$fibrin', '$fibrinogenB', '$v_r', '$trombotest', '$data', '$sid')";
	
	//echo $sql;
	$result = query($sql);
	
	if ($result) 
		header('location: index.php?option=viewAll');
}