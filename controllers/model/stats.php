<?php

function getAllSicks() {
	$sql = "SELECT * FROM bemorho";
	$res_count = query($sql);
    $result['sum'] = mysql_num_rows($res_count);

    $sql = "SELECT * FROM bemorho WHERE sex='зан'";
    $res_women_count = query($sql);
    $result['women_count'] = mysql_num_rows($res_women_count);
    $result['man_count'] = $result['sum'] - $result['women_count'];

return $result;
}

function getStatsFromCity($city){
    $sql = "SELECT * FROM bemorho WHERE city='$city'";
    $res = query($sql);

    while ($row = mysql_fetch_object($res))
    	$result[] = $row;

    return $result;
}

function getSexFromCities($city) {
	$sql = "SELECT * FROM bemorho WHERE city='$city' AND sex='зан'";
	$res = query($sql);

	$result->women = mysql_num_rows($res);

	$sql = "SELECT * FROM bemorho WHERE city='$city' AND sex='мард'";
	$res = query($sql);

	$result->man = mysql_num_rows($res);

	return $result;
}

function getCitiesFromRegions($id_region) {
	$sql = "SELECT * FROM cities WHERE id_viloyat='$id_region'";
	$res = query($sql);

	while ($row = mysql_fetch_object($res))
		$result[] = $row;

	return $result;
}

function getAllRegions() {
	$sql = "SELECT * FROM viloyat ORDER BY id DESC";
	$res = query($sql);

	while($row = mysql_fetch_object($res))
		$result[] = $row;

	return $result;
}

function getRegionByCityName($name) {
	$sql = "SELECT * FROM cities WHERE name='$name'";
	$res = query($sql);
	$row = mysql_fetch_object($res);

	$id_region = $row->id_viloyat;
    
	$sql = "SELECT * FROM viloyat WHERE id='$id_region'";
	$res = query($sql);
    $row = mysql_fetch_object($res);

    return $row->name;
}
function getByCity($name, $start, $limit) {
	$sql = "SELECT * FROM bemorho WHERE city='$name' ORDER BY id DESC LIMIT $start, $limit";
	$res = query($sql);

	while ($row = mysql_fetch_object($res))
		$result[] = $row;

	return $result;
}
