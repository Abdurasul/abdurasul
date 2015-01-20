<?php
// 
//
if (isset($_POST['add']))
{
    $hatsayr = $_POST['hatsayr'];    
	$NomiBemor = $_POST['NomiBemor'];
	$SoliTavallud = $_POST['SoliTavallud'];
	$address = $_POST['address'];
	$ImtieznokiiBemor = $_POST['ImtieznokiiBemor'];
	$hujjat = $_POST['hujjat'];
	$NomiDuhtur = $_POST['NomiDuhtur'];
	$TashhisiPeshaki = $_POST['TashhisiPeshaki'];
	$date = date('Y-m-d');
	$sex = $_POST['sex'];
    $city = getCityById($_POST['city']);
    $region = getRegionById($_POST['region']);


        
	$sql = "INSERT INTO bemorho(hatsayr, NomiBemor, SoliTavallud, address, ImtieznokiiBemor, hujjat, NomiDuhtur, TashhisiPeshaki, data, sex, city, region)
						VALUES('$hatsayr', '$NomiBemor', '$SoliTavallud', '$address', '$ImtieznokiiBemor', '$hujjat', '$NomiDuhtur', '$TashhisiPeshaki', '$date', '$sex', '$city', '$region')";
			
	$result = query($sql);
	
	if ($result) 
		header('location: index.php?option=viewAll');
}