<?php
// 
//
if (isset($_POST['add']))
{
    $peshob = $_POST['peshob'];
	$sana = $_POST['sana'];
	$muassisa = $_POST['muassisa'];
	$r_h = $_POST['r_h'];
	$mikdor = $_POST['mikdor'];
	$rang = $_POST['rang'];
	$sofi = $_POST['sofi'];
	$v_j = $_POST['v_j'];
	$voguzish = $_POST['voguzish'];
	$safeda = $_POST['safeda'];
	$kand = $_POST['kand'];
	$j_k = $_POST['j_k'];
	$v_h = $_POST['v_h'];
	$bilirubin = $_POST['bilirubin'];
	$t_z = $_POST['t_z'];
	$epitelia = $_POST['epitelia'];
	$sufti = $_POST['sufti'];
	$guzaranda = $_POST['guzaranda'];
	$a_g = $_POST['a_g'];
	$leykocitho = $_POST['leykocitho'];
	$eritposit = $_POST['eritposit'];
	$tagirnaefta = $_POST['tagirnaefta'];
	$tagirefta = $_POST['tagirefta'];
	$cilindr = $_POST['cilindr'];
	$gialini = $_POST['gialini'];
	$donagi = $_POST['donagi'];
	$epitelani = $_POST['epitelani'];
	$leykositho = $_POST['leykositho'];
	$eritrocitho = $_POST['eritrocitho'];
	$pigmenti = $_POST['pigmenti'];
	$gadud = $_POST['gadud'];
	$namak = $_POST['namak'];
	$mikrobho = $_POST['mikrobho'];
	$vakt = $_POST['vakt'];
	$sid = $_POST['sid'];
	
	$sql = "INSERT INTO peshob(peshob,sana,muassisa,r_h, mikdor,rang,sofi,v_j,voguzish,safeda,kand,j_k,v_h,bilirubin,t_z,epitelia,sufti,
								guzaranda, a_g, leykocitho, eritposit, tagirnaefta, tagirefta, cilindr, gialini, donagi, epitelani, leykositho,
								eritrocitho, pigmenti, gadud, namak, mikrobho, vakt, sid)
					VALUES('$peshob', '$sana', '$muassisa','$r_h','$mikdor', '$rang', '$sofi', '$v_j','$voguzish', '$safeda','$kand', '$j_k', '$v_h',
							'$bilirubin', '$t_z', '$epitelia', '$sufti', '$guzaranda', '$a_g', '$leykocitho', '$eritposit', '$tagirnaefta', '$tagirefta', '$cilindr', '$gialini', '$donagi', '$epitelani', '$leykositho',
							'$eritrocitho', '$pigmenti', '$gadud', '$namak', '$mikrobho', '$vakt', '$sid')";
	//echo $sql;
	$result = query($sql);
	
	if ($result) 
		header('location: index.php?option=viewAll');
}