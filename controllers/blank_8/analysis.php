<?php
// 
//
if (isset($_POST['add']))
{
    $sid = $_POST['sid'];
	$muassisa = $_POST['muassisa'];
	$shuba = $_POST['shuba'];
	$hujra = $_POST['hujra'];
	$kita = $_POST['kita'];
	$tarih = $_POST['tarih'];
	$mikdor = $_POST['mikdor'];
	$konsistensia = $_POST['konsistensia'];
	$namud = $_POST['namud'];
	$buy = $_POST['buy'];
	$rang = $_POST['rang'];
	$reaksia = $_POST['reaksia'];
	$luob = $_POST['luob'];
	$hun = $_POST['hun'];
	$huroka = $_POST['huroka'];
	$t_hun = $_POST['t_hun'];
	$t_srerhobilin = $_POST['t_srerhobilin'];
	$t_bilirubin = $_POST['t_bilirubin'];
	$hatdor = $_POST['hatdor'];
	$behat = $_POST['behat'];
	$payvandi = $_POST['payvandi'];
	$charbu = $_POST['charbu'];
	$charbui_kislotagi = $_POST['charbui_kislotagi'];
	$sobun = $_POST['sobun'];
	$hujayra = $_POST['hujayra'];
	$krahmal = $_POST['krahmal'];
	$yodofilia = $_POST['yodofilia'];
	$kristalho = $_POST['kristalho'];
	$luob2 = $_POST['luob2'];
	$epiteley = $_POST['epiteley'];
	$leykositho = $_POST['leykositho'];
	$eritrositho = $_POST['eritrositho'];
	$sodatarinho = $_POST['sodatarinho'];
	$tuhmi_j = $_POST['tuhmi_j'];
	$zambuguruho = $_POST['zambuguruho'];
	$data = date('y-m-d');
	
	
	$sql = "INSERT tahlilifazla(sid, muassisa, shuba, hujra, kita, tarih, mikdor, konsistensia, namud, buy, rang, reaksia, luob,
								hun, huroka, t_hun, t_srerhobilin, t_bilirubin, hatdor, behat, payvandi, charbu, charbui_kislotagi, sobun,
								hujayra, krahmal, yodofilia, kristalho, luob2, epiteley, leykositho, eritrositho, sodatarinho, tuhmi_j, zambuguruho, data)
					VALUES('$sid', '$muassisa','$shuba','$hujra', '$kita', '$tarih','$mikdor','$konsistensia', '$namud', '$buy','$rang', '$reaksia', '$luob',
					'$hun', '$huroka', '$t_hun', '$t_srerhobilin', '$t_bilirubin', '$hatdor', '$behat', '$payvandi', '$charbu', '$charbui_kislotagi', '$sobun',
					'$hujayra', '$krahmal', '$yodofilia', '$kristalho', '$luob2', '$epiteley', '$leykositho', '$eritrositho', '$sodatarinho', '$tuhmi_j', '$zambuguruho', '$data')";
	//echo $sql;
	$result = query($sql);
	
	if ($result) 
		header('location: index.php?option=viewAll');
}