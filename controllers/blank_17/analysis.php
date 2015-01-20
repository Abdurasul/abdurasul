<?php
// 
//
if (isset($_POST['add']))
{


    /*========= PART 1 ===========*/

    $muqarrari = (isset($_POST['muqarrari'])) ? 1 : 0;
    $varamkarda = (isset($_POST['varamkarda'])) ? 1 : 0;
    $surhshuda = (isset($_POST['surhshuda'])) ? 1 : 0 ;
    $rangparida = (isset($_POST['rangparida'])) ? 1 : 0;

    $data1 = $_POST['data1'];

    $a_m = (isset($_POST['a_m'])) ? 1 : 0;
    $tashanuch = (isset($_POST['tashanuch'])) ? 1 : 0;
    $spazm = (isset($_POST['spazm'])) ? 1 : 0 ;
    $kushoda = (isset($_POST['kushoda'])) ? 1 : 0 ;
    $vaseshuda = (isset($_POST['vaseshuda'])) ? 1 : 0;
    $guzaro = (isset($_POST['guzaro'])) ? 1 : 0;

    $data2 = $_POST['data2'];

    $sql = "INSERT INTO epart1
    (muqarrari, varamkarda, surhshuda, rangparida, data1, a_m, tashanuch, spazm,
      kushoda, vaseshuda, guzaro, data2) 
    VALUES 
    ('$muqarrari', '$varamkarda', '$surhshuda', '$rangparida', '$data1', '$a_m', '$tashanuch', '$spazm',
      '$kushoda', '$vaseshuda', '$guzaro', '$data2')";

    //$res = query($sql);
    /*============= PART 2 =============*/ 

    $mvt = (isset($_POST['mvt'])) ? 1 : 0;
    $s2 = (isset($_POST['s3'])) ? 1 : 0;
    $v2 = (isset($_POST['v2'])) ? 1 : 0;
    $r2 = (isset($_POST['r2'])) ? 1 : 0;
    $t2 = (isset($_POST['t2'])) ? 1 : 0;
    $rh2 = (isset($_POST['rh2'])) ? 1 : 0;
    $data3 = $_POST['data3'];

    $mvt3 = (isset($_POST['mvt3'])) ? 1: 0;
    $s3 = (isset($_POST['s3'])) ? 1 : 0;
    $v3 = (isset($_POST['v3'])) ? 1 : 0;
    $r3 = (isset($_POST['r3'])) ? 1 : 0;
    $t3 = (isset($_POST['t3'])) ? 1 : 0;
    $rh3 = (isset($_POST['rh3'])) ? 1 : 0;
    $data4 = $_POST['data4'];
    
    $sql = "INSERT INTO epart2
    (mvt, s2, v2, r2, t2, rh2, data3, mvt3, s3, v3, r3, t3, rh3, data4)
    VALUES
    ('$mvt', '$s2', '$v2', '$r2', '$t2', '$rh2', '$data3', '$mvt3', '$s3', '$v3', '$r3', '$t3', '$rh3', '$data4')";

   //$res = query($sql);
   $m4 = (isset($_POST['m4'])) ? 1 : 0;
   $g4 = (isset($_POST['g4'])) ? 1 : 0;
   $b4 = (isset($_POST['b4'])) ? 1 : 0;
   $k4 = (isset($_POST['k4'])) ? 1 : 0;

   $data5 = $_POST['data5'];
   $zahm = $_POST['zahm'];
   $erozia = $_POST['erozia'];
   $omos = $_POST['omos'];

   $m5 = (isset($_POST['m5'])) ? 1 : 0;
   $z5 = (isset($_POST['z5'])) ? 1 : 0;
   $k5 = (isset($_POST['k5'])) ? 1 : 0;
   $obz5 = (isset($_POST['obz5'])) ? 1 : 0; 
   $data6 = $_POST['data6'];
   
}