<?php
// 
//
if (isset($_POST['add']))
{
	/*======= HATSAYR ========*/
	if (!isset($_GET['id']))
	{
	    $name = $_POST['name'];
     	$sex = $_POST['sex'];
	    $SoliTavallud = $_POST['SoliTavallud'];
	    $region = getRegionById($_POST['region']);
	    $city = getCityById($_POST['city']);
	    $address = $_POST['address'];
	    $ImtieznokiiBemor = $_POST['ImtieznokiiBemor'];
	    $hujjat = $_POST['hujjat'];
	    $sana = date('d-m-y');

	    $sql = "INSERT INTO bemorho (NomiBemor, SoliTavallud, address, ImtieznokiiBemor, hujjat, region, city, sex, data)
	    					VALUES('$name', '$SoliTavallud', '$address', '$ImtieznokiiBemor', '$hujjat', '$region', '$city', '$sex', '$sana')";
        
        query($sql);
    }

	/*======== ISTORIYA ==========*/
	$num = $_POST['num'];
	$ruz_q = $_POST['ruz_q'];
	$ruz_j = $_POST['ruz_j'];
	$shuba = $_POST['shuba'];
	$hujra = $_POST['hujra'];
	$harorat = $_POST['harorat'];
	$ba_shuba = $_POST['ba_shuba'];
	$ruz_b = $_POST['ruz_b'];
	
	$spart1 = $_POST['spart1'];
	$spart2 = $_POST['spart2'];
	$spart3 = $_POST['spart3'];
	$spart4 = $_POST['spart4'];
	$spart5 = $_POST['spart5'];
	$spart6 = $_POST['spart6'];
	$spart7 = $_POST['spart7'];

	if (checkAnalisys($_POST['sid']) == 1)
		$sql  = "UPDATE spart1 SET num='$num', ruz_q='$ruz_q', ruz_j='$ruz_j', shuba='$shuba', hujra='$hujra', harorat='$harorat'
											, ba_shuba='$ba_shuba' , ruz_b='$ruz_b' WHERE id='$spart1'";
	else 	
		$sql = "INSERT INTO spart1(num, ruz_q, ruz_j, shuba, hujra, harorat, ba_shuba, ruz_b)
			            VALUES('$num', '$ruz_q', '$ruz_j', '$shuba', '$hujra', '$harorat', '$ba_shuba', '$ruz_b')";
			          
	query($sql);
	
	$aroba = (isset($_POST['aroba'])) ? 1 : 0 ;
	$kur_aroba = (isset($_POST['kur_aroba'])) ? 1 : 0;
	$roh_g = (isset($_POST['roh_g'])) ? 1: 0;
	$guruh_hun = $_POST['guruh_hun'];
	$rezus_k = $_POST['rezus_k'];
	$vazn = $_POST['vazn'];
	$qad = $_POST['qad'];
	$ivb = $_POST['ivb'];
	
	if (checkAnalisys($_POST['sid']) == 1)
		$sql = "UPDATE spart2 SET aroba='$aroba', kur_aroba='$kur_aroba', roh_g='$roh_g', guruh_hun='$guruh_hun', rezus_k='$rezus_k',
								vazn='$vazn', qad='$qad', ivb='$ivb' WHERE id='$spart2'";
	else
		$sql = "INSERT INTO spart2 (aroba, kur_aroba, roh_g, guruh_hun, rezus_k, vazn, qad, ivb)
			            VALUES('$aroba', '$kur_aroba', '$roh_g', '$guruh_hun', '$rezus_k', '$vazn', '$qad', '$ivb')";
	query($sql);


	$tahammul = $_POST['tahammul'];
	$kor = $_POST['kor'];
	$ligot = $_POST['ligot'];
	$rad = $_POST['rad'];
	$badi = $_POST['badi'];
	$t_m_r = $_POST['t_m_r'];
	$t_h_q = $_POST['t_h_q'];
	$t_k = $_POST['t_k'];
	$ruz_m = $_POST['ruz_m'];
	$d1 = $_POST['d1'];
	$d2 = $_POST['d2'];
	$d3 = $_POST['d3'];
	$miqdor = $_POST['miqdor'];

	if (checkAnalisys($_POST['sid']) == 1)
		$sql = "UPDATE spart3 SET tahammul='$tahammul', kor='$kor', ligot='$ligot', rad='$rad', badi='$badi', t_m_r='$t_m_r', 
									t_h_q='$t_h_q', t_k='$t_k', ruz_m='$ruz_m', d1='$d1', d2='$d2', d3='$d3', miqdor='$miqdor' WHERE id='$spart3'";
	else 
		$sql = "INSERT INTO spart3 (tahammul, kor, ligot, rad, badi, t_m_r, t_h_q, t_k, ruz_m, d1, d2, d3, miqdor)
						VALUES('$tahammul', '$kor', '$ligot', '$rad', '$badi', '$t_m_r', '$t_h_q', '$t_k', '$ruz_m', '$d1', '$d2', '$d3', '$miqdor')";
	
	query($sql);
	$a1 = $_POST['a1'];
	$a2 = $_POST['a2'];
	$a3 = $_POST['a3'];
	$a4 = $_POST['a4'];
	$a5 = $_POST['a5'];
	$a6 = $_POST['a6'];
	$a7 = $_POST['a7'];
	$a8 = $_POST['a8'];
	$a9 = $_POST['a9'];
	$a10 = $_POST['a10'];
    $a11 = $_POST['a11'];
    $a12 = $_POST['a12'];
	$mu_ilova = $_POST['mu_ilova'];
	$b_o = $_POST['b_o'];
	
	if (checkAnalisys($_POST['sid']) == 1)
		$sql = "UPDATE spart4 SET a1='$a1', a2='$a2', a3='$a3', a4='$a4', a5='$a5', a6='$a6', a7='$a7', a8='$a8', a9='$a9', a10='$a10', a11='$a11', 
									a12='$a12', mu_ilova='$mu_ilova', b_o='$b_o' WHERE id='$spart4'";
	else 
		$sql = "INSERT INTO spart4 (a1, a2, a3, a4, a5, a6, a7, a8, a9, a10, a11, a12, mu_ilova, b_o)
	                    VALUES('$a1', '$a2', '$a3', '$a4', '$a5', '$a6', '$a7', '$a8', '$a9', '$a10', '$a11', '$a12', '$mu_ilova', '$b_o')";
	query($sql);
	$b1 = $_POST['b1'];
	$b2 = $_POST['b2'];
	$b3 = $_POST['b3'];
	$b4 = $_POST['b4'];
	$b5 = $_POST['b5'];
	$b6 = $_POST['b6'];
	$b7 = $_POST['b7'];
	$b8 = $_POST['b8'];
	$b9 = $_POST['b9'];
	$b10 = $_POST['b10'];
	$b11 = $_POST['b11'];
	$b12 = $_POST['b12'];
	
	if (checkAnalisys($_POST['sid']) == 1)
		$sql = "UPDATE spart5 SET b1='$b1', b2='$b2', b3='$b3', b4='$b4', b5='$b5', b6='$b6', b7='$b7', b8='$b8', b9='$b9', b10='$b10'
									, b11='$b11', b12='$b12' WHERE id='$spart5'";
	else
		$sql = "INSERT INTO spart5 (b1, b2, b3, b4, b5, b6, b7, b8, b9, b10, b11, b12)
							VALUES('$b1', '$b2', '$b3', '$b4', '$b5', '$b6', '$b7', '$b8', '$b9', '$b10', '$b11', '$b12')";
	
	query($sql);

	$jshs = (isset($_POST['jshs'])) ? 1 : 0;
	$bb = (isset($_POST['bb'])) ? 1 : 0;
	$bbsh = (isset($_POST['bbsh'])) ? 1 : 0;
	$bdm = (isset($_POST['bdm'])) ? 1 : 0;
	$dkf = (isset($_POST['dkf'])) ? 1 : 0;
	$zh23 = (isset($_POST['zh23'])) ? 1 : 0;
	$zh25 = (isset($_POST['zh25'])) ? 1 : 0;

	$t = (isset($_POST['t'])) ? 1 : 0;
	$k = (isset($_POST['k'])) ? 1 : 0;
	$m = (isset($_POST['m'])) ? 1 : 0;
	$b = (isset($_POST['b'])) ? 1 : 0;


	if (checkAnalisys($_POST['sid']) == 1)
		$sql = "UPDATE spart6 SET jshs='$jshs', bb='$bb', bbsh='$bbsh', bdm='$bdm', dfk='$dfk', zh23='$zh23',
						 zh25='$zh25', t='$t', k='$k', m='$m', b='$b' WHERE id='$spart6'";
	else 
		$sql = "INSERT INTO spart6 (jshs, bb, bbsh, bdm, dfk, zh23, zh25, t, k, m, b)
	                VALUES ('$jshs', '$bb', '$bbsh', '$bdm', '$dfk', '$zh23', '$zh25', '$t', '$k', '$m', '$b')";
	
	query($sql);


	$hh2 = $_POST['hh2'];
	$h2 = $_POST['h2'];
	$n2 = $_POST['n2'];
	$t_sh = $_POST['t_sh'];
	$m_b = $_POST['m_b'];
	

	if (checkAnalisys($_POST['sid']) == 1)
		$sql = "UPDATE spart7 SET hh2='$hh2', h2='$h2', n2='$n2', t_sh='$t_sh', m_b='$m_b' WHERE id='$spart7'";
	else 
		$sql = "INSERT INTO spart7(hh2, h2, n2, t_sh, m_b)
						VALUES('$hh2', '$h2', '$n2', '$t_sh', '$m_b')";
						
	query($sql);

	
	/*=========== SPART 1 ==========*/
	if (checkAnalisys($_POST['sid']) == 0) {

		$sql = "SELECT id FROM spart1 ORDER BY id DESC";
		$res = query($sql);
		$row = mysql_fetch_object($res);
		
		$id1 = $row->id;
		
	/*=========== SPART 1 ==========*/
		$sql = "SELECT id FROM spart1 ORDER BY id DESC LIMIT 1";
		$res = query($sql);
		$row = mysql_fetch_object($res);
		
		$id1 = $row->id;
	
	/*=========== SPART 2 ==========*/
		$sql = "SELECT id FROM spart2 ORDER BY id DESC LIMIT 1";
		$res = query($sql);
		$row = mysql_fetch_object($res);
		
		$id2 = $row->id;
	
	/*=========== SPART 3 ==========*/
		$sql = "SELECT id FROM spart3 ORDER BY id DESC LIMIT 1";
		$res = query($sql);
		$row = mysql_fetch_object($res);
		
		$id3 = $row->id;
	
	/*=========== SPART 4 ==========*/
		$sql = "SELECT id FROM spart4 ORDER BY id DESC LIMIT 1";
		$res = query($sql);
		$row = mysql_fetch_object($res);
		
		$id4 = $row->id;
	
	/*=========== SPART 5 ==========*/
		$sql = "SELECT id FROM spart5 ORDER BY id DESC LIMIT 1";
		$res = query($sql);
		$row = mysql_fetch_object($res);
		
		$id5 = $row->id;
	
	/*=========== SPART 6 ==========*/
		$sql = "SELECT id FROM spart6 ORDER BY id DESC LIMIT 1";
		$res = query($sql);
		$row = mysql_fetch_object($res);
		
		$id6 = $row->id;
	
	/*=========== SPART 7 ==========*/
		$sql = "SELECT id FROM spart7 ORDER BY id DESC LIMIT 1";
		$res = query($sql);
		$row = mysql_fetch_object($res);
		
		$id7 = $row->id;
	
	
	    if (!isset($_GET['id']))
	    	$sid = getLastBemor() ;
	    else 
		    $sid = $_GET['id'];

		$sql = "INSERT INTO story (spart1, spart2, spart3, spart4, spart5, spart6, spart7, sid)
		                    VALUES('$id1', '$id2', '$id3', '$id4', '$id5', '$id6', '$id7', '$sid')";
		query($sql);

	}
	header("location: index.php?option=viewAll");

}