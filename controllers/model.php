<?php

include_once('model/base.php');
include_once('model/stats.php');
include_once('model/filter.php');

function strtolower_my($str) {
	$str = strtolower($str);

	$search = array(
	'É','Ö','Ó','Ê','Å','Í','Ã','Ø','Ù','Ç','Õ','Ú','Ô','Û','Â','À','Ï','Ğ','Î','Ë','Ä','Æ','İ','ß','×','Ñ','Ì','È','Ò','Ü','Á','Ş','¨'
	);

	$replace = array(
	'é','ö','ó','ê','å','í','ã','ø','ù','ç','õ','ú','ô','û','â','à','ï','ğ','î','ë','ä','æ','ı','ÿ','÷','ñ','ì','è','ò','ü','á','ş','¸'
	);

	$str = str_replace($search, $replace, $str);
	return $str;
}
function find($text)
{
    $sql = "SELECT * FROM bemorho";
    $res = query($sql);
    
    $k = -1;
    while ($row = mysql_fetch_array($res))
    {
        $str = strtolower_my($row['NomiBemor']);
        $substr = strtolower_my($text);
        
        if (strpos($str, $substr) === false)
        {
        }
        else
        {
            $k++;
            $result[$k]->NomiBemor = $row['NomiBemor'];
            $result[$k]->SoliTavallud = $row['SoliTavallud'];
            $result[$k]->address = $row['address'];
            $result[$k]->id = $row['id'];
        }
    }
    return $result;
}

function getBemorInfo($id){
	
	$result = array();
	
	/*=== BEMOR INFO ===*/
	$sql = "SELECT * FROM bemorho WHERE id='$id'";
	$res = query($sql);

	while($row = mysql_fetch_object($res))
		$result['main'] = $row;
		
    /*==== TAHLILI KANDI HUN =====*/
	$sql = "SELECT * FROM tahlilikandihun WHERE sid='$id'";
	$res = query($sql);

	while($row = mysql_fetch_object($res))
		$result['tahlilikandihun'] = $row;


    /*==== TAHLILI MOCHEVINAI HUN =====*/
	
    $sql = "SELECT * FROM tahlilimochevinaihun WHERE sid='$id'";
    $res = query($sql);

    while($row = mysql_fetch_object($res))
    	$result['tahlilimochevinaihun'] = $row;


    /*==== TAHLILI HUN ====*/
    $sql = "SELECT * FROM tahlilihun WHERE sid='$id'";
    $res = query($sql);

    while($row = mysql_fetch_object($res))
    	$result['tahlilihun'] = $row; 

     /*==== TAHLILI HUN1 ====*/
    $sql = "SELECT * FROM tahlilihun1 WHERE sid='$id'";
    $res = query($sql);

    while($row = mysql_fetch_object($res))
    	$result['tahlilihun1'] = $row; 



    /*===== OZMOISHI KLINIKI ======*/
    $sql = "SELECT * FROM ozmoishikliniki WHERE sid='$id'";
    $res = query($sql);

    while($row = mysql_fetch_object($res))
    	$result['ozmoishikliniki'] = $row;


    /*==== Tashhisi farosadii ======*/
    $sql = "SELECT * FROM tahshisifarosadoi WHERE sid='$id'";
    $res = query($sql);

    while($row = mysql_fetch_object($res))
    	$result['tahshisifarosadoi'] = $row;

    /*=== Tahlili fazla ===*/
    $sql = "SELECT * FROM tahlilifazla WHERE sid='$id'";
    $res = query($sql);

    while($row = mysql_fetch_object($res))
    	$result['tahlilifazla'] = $row;
    
	/*==== Lahtashavii Hun ======*/
	$sql = "SELECT * FROM lahtashaviihun WHERE sid='$id'";
	$res = query($sql);
	
	while($row = mysql_fetch_object($res))
		$result['lahtashaviihun'] = $row;
	
	/*==== Ozmoishi imunologi ====*/
	$sql = "SELECT * FROM ozmoishigohi_i WHERE sid='$id'";
	$res = query($sql);
	
	while($row = mysql_fetch_object($res))
		$result['o_i'] = $row;
		
	/*=== BIOKIMIEVII HUN =====*/
	$sql = "SELECT * FROM biokimievi WHERE sid='$id'";
	$res = query($sql);
	
	while($row = mysql_fetch_object($res))
		$result['bio'] = $row;
		
	/*=== PESHOB ====*/
	$sql = "SELECT * FROM peshob WHERE sid='$id'";
	$res = query($sql);
	
	while($row = mysql_fetch_object($res))
		$result['peshob'] = $row;
		
	/*===== Virus ======*/
	$sql = "SELECT * FROM virus WHERE sid='$id'";
	$res = query($sql);
	
	while($row = mysql_fetch_object($res))
		$result['virus'] = $row;
	
	
	/*-====== Patologi ======*/
	$sql = "SELECT * FROM patologi WHERE sid='$id'";
	$res = query($sql);
	
	while($row = mysql_fetch_object($res))
		$result['patologi'] = $row;
		
	
	
	return $result;
}

function getKassa($id) {
    
    $sql = "SELECT kassa FROM biokimievi WHERE sid='$id'";
    $res = query($sql);
    $row = mysql_fetch_object($res);
    $result['biokimievi']->kassa = $row->kassa;
    
    $sql = "SELECT kassa FROM lahtashaviihun WHERE sid='$id'";
    $res = query($sql);
    $row = mysql_fetch_object($res);
    $result['lahtashaviihun']->kassa = $row->kassa;
    
    $sql ="SELECT kassa FROM ozmoishigohi_i WHERE sid='$id'";
    $res = query($sql);
    $row = mysql_fetch_object($res);
    $result['ozmoishigohi_i']->kassa = $row->kassa;
    
    $sql ="SELECT kassa FROM ozmoishikliniki WHERE sid='$id'";
    $res = query($sql);
    $row = mysql_fetch_object($res);
    $result['ozmoishikliniki']->kassa = $row->kassa;
    
    $sql ="SELECT kassa FROM patologi WHERE sid='$id'";
    $res = query($sql);
    $row = mysql_fetch_object($res);
    $result['patologi']->kassa = $row->kassa;
    
    $sql ="SELECT kassa FROM peshob WHERE sid='$id'";
    $res = query($sql);
    $row = mysql_fetch_object($res);
    $result['peshob']->kassa = $row->kassa;
    
    $sql ="SELECT kassa FROM tahlilifazla WHERE sid='$id'";
    $res = query($sql);
    $row = mysql_fetch_object($res);
    $result['tahlilifazla']->kassa = $row->kassa;
    
    $sql ="SELECT kassa FROM tahlilihun WHERE sid='$id'";
    $res = query($sql);
    $row = mysql_fetch_object($res);
    $result['tahlilihun']->kassa = $row->kassa;
    
    $sql ="SELECT kassa FROM tahlilihun1 WHERE sid='$id'";
    $res = query($sql);
    $row = mysql_fetch_object($res);
    $result['tahlilihun1']->kassa = $row->kassa;
    
    $sql ="SELECT kassa FROM tahlilikandihun WHERE sid='$id'";
    $res = query($sql);
    $row = mysql_fetch_object($res);
    $result['tahlilikandihun']->kassa = $row->kassa;
    
    $sql ="SELECT kassa FROM tahlilimochevinaihun WHERE sid='$id'";
    $res = query($sql);
    $row = mysql_fetch_object($res);
    $result['tahlilimochevinaihun']->kassa = $row->kassa;
    
    $sql ="SELECT kassa FROM tahshisifarosadoi WHERE sid='$id'";
    $res = query($sql);
    $row = mysql_fetch_object($res);
    $result['tahshisifarosadoi']->kassa = $row->kassa;
    
    $sql ="SELECT kassa FROM virus WHERE sid='$id'";
    $res = query($sql);
    $row = mysql_fetch_object($res);
    $result['virus']->kassa = $row->kassa;

    return $result;
}