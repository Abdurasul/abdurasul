<?php
	
	function getRegionNameById($id) {

		$sql = "SELECT * FROM viloyat WHERE id='$id'";

		$res = query($sql);
        $row = mysql_fetch_object($res);

        return $row;
	}

	function getCityNameById($id) {

		$sql = "SELECT * FROM cities WHERE id='$id'";

		$res = query($sql);
		$row = mysql_fetch_object($res);

		return $row;
	}

	function filter($region, $city, $sex, $age) {
        
        if ($sex == 'no' && $age == 'no') {
        	$sql = "SELECT * FROM bemorho WHERE region='$region' AND city='$city'";
        }
        else if ($sex == 'no' && $age != 'no') {
        	if ($age == 1)
        	    $sql = "SELECT * FROM bemorho WHERE region='$region' AND city='$city' AND age >= 0 AND age < 20";
        	if ($age == 2)
        	    $sql = "SELECT * FROM bemorho WHERE region='$region' AND city='$city' AND age >= 20 AND age < 40";
        	if ($age == 3)
        	    $sql = "SELECT * FROM bemorho WHERE region='$region' AND city='$city' AND age >= 40 AND age < 60";
        	if ($age == 4)
        	    $sql = "SELECT * FROM bemorho WHERE region='$region' AND city='$city' AND age >= 60";
        }

        else if ($sex != 'no' && $age == 'no')
        	$sql = "SELECT * FROM bemorho WHERE region='$region' AND city='$city' AND sex='$sex'";
        else {
        	if ($age == 1)
        	    $sql = "SELECT * FROM bemorho WHERE region='$region' AND city='$city' AND sex='$sex' AND age >= 0 AND age < 20";
        	if ($age == 2)
        	    $sql = "SELECT * FROM bemorho WHERE region='$region' AND city='$city' AND sex='$sex' AND age >= 20 AND age < 40";
        	if ($age == 3)
        	    $sql = "SELECT * FROM bemorho WHERE region='$region' AND city='$city' AND sex='$sex' AND age >= 40 AND age < 60";
        	if ($age == 4)
        	    $sql = "SELECT * FROM bemorho WHERE region='$region' AND city='$city' AND sex='$sex' AND age >= 60";
        }

        $res = query($sql);
        while ($row = mysql_fetch_object($res))
        	$result[] = $row;

        return $result;
	}