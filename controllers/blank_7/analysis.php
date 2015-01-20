<?php
// 
//
if (isset($_POST['add']))
{
    
	$ruzitashhis = $_POST['ruzitashhis'];
	$chigar_andoza = $_POST['chigar_andoza'];
	$chigar_kontur = $_POST['chigar_kontur'];
	$chigar_sohtor = $_POST['chigar_sohtor'];
	$sadoguzaroni = $_POST['sadoguzaroni'];
	$varidho = $_POST['varidho'];
	$vportae = $_POST['vportae'];
	$omos = $_POST['omos'];
	$talhadon_shakl = $_POST['talhadon_shakl'];
	$talhadon_andoza = $_POST['talhadon_andoza'];
	$devor = $_POST['devor'];
	$talha = $_POST['talha'];
	$sang = $_POST['sang'];
	$holedoh = $_POST['holedoh'];
	$g_andoz = $_POST['g_andoz'];
	$g_kontur = $_POST['g_kontur'];
	$g_sohtor = $_POST['g_sohtor'];
	$g_omos = $_POST['g_omos'];
	$protok = $_POST['protok'];
	$hulosa = $_POST['hulosa'];
	$sid = $_POST['sid'];
	$data = date('Y-m-d');
	
	$sql = "INSERT INTO tahshisifarosadoi(ruzitashhis, chigar_andoza, chigar_kontur, chigar_sohtor, sadoguzaroni, varidho, vportae, omos, talhadon_shakl,talhadon_andoza,
								devor, talha, sang, holedoh, g_andoz, g_kontur, g_sohtor, g_omos, protok, hulosa, sid, data) 
						VALUES('$ruzitashhis', '$chigar_andoza', '$chigar_kontur', '$chigar_sohtor', '$sadoguzaroni', '$varidho', '$vportae', '$omos', '$talhadon_shakl','$talhadon_andoza',
						'$devor', '$talha', '$sang', '$holedoh', '$g_andoz', '$g_kontur', '$g_sohtor', '$g_omos', '$protok', '$hulosa', '$sid', '$data')";
	
	//echo $sql;
	$result = query($sql);
	
	if ($result) 
		header('location: index.php?option=viewAll');
}