<?php

$conn = mysql_connect('localhost', 'root', '');
$db = mysql_select_db('medicine', $conn);


$sql = "SELECT * FROM viloyat ORDER BY id DESC";
$res = mysql_query($sql);

while ($row = mysql_fetch_object($res))
         $obl[] = $row;

$submit = $_POST['submit'];
if (isset($submit)) {

    $obl = $_POST['oblast'];
	$gorod = $_POST['gorod'];
    
    $sql1 = "INSERT INTO cities(id_viloyat, name) VALUES('$obl', '$gorod')";

	mysql_query($sql1);

	//header('location: index.php');

	unset($submit);
}

?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title></title>

	<!-- Include styles -->
	<link rel="stylesheet" href="../style/css/bootstrap.css">
	<link rel="stylesheet/less" href="../style/main.less">
	<link rel="stylesheet" href="../style/tpl.css">
	<link href='http://fonts.googleapis.com/css?family=McLaren|Ruluko|Playfair+Display+SC|Cinzel&subset=latin,latin-ext,cyrillic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
     
    <!--=== Include JS ===-->
    <script src="../js/jquery-1.9.1.js"></script>
    <script src="../js/blur.js"></script>
    <script src="../style/js/bootstrap.js"></script>
    <script src="../style/9.less-1.3.0.min.js"></script>
	<script>
		$('.window').blurjs({ 
			source: 'body', 
			overlay: 'rgba(255,255,255,0)'
		});
	</script>
</head>
<body>

    <div class="row">
		<div class="col-lg-12 header">
			<div class="row">
				<div class="col-lg-12 col-lg-offset-1">
					<div class="">
						<div class="logo"></div>
					</div>
					<div class="col-lg-5  col-sm-6 col-sm-offset-2 col-md-6 col-md-offset-1 col-xs-11 col-xs-offset-3">
						<div class="logoTxt">
							Вазорати Тандурусти ва ҳифзи иҷтимоии аҳолии Ҷумҳурии Тоҷикистон, пажоҳишгоҳи Гастроэнтерология
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
    
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-4 col-lg-offset-4 window" style="margin-top: 50px; padding: 15px;">
			<form action="" role="form" method="post">
				<div class="form-group">
					<label for="">Выберити область: </label>
					<select name="oblast" id="" class="form-control">
						<?php
						   for($i = 0; $i < count($obl); $i++)
						   {
                               $id = $obl[$i]->id;
						   	   echo "<option value='$id'>";
						   	      echo $obl[$i]->name;
						   	   echo '</option>';
						   }
						?>
					</select>
				</div>
				<div class="form-group">
					<label for="">Добавить город:</label>
					<input type="text" class="form-control input-sm" name="gorod">
				</div>
				<button type="submit" class="btn btn-primary" name='submit'>Добавить</button>	
			</form>
		</div>
	</div>
</div>




<div class="container">
	<div class="row">
		<div class="col-lg-12" style="height: 50px ;"></div>
	</div>
</div>
</body>
</html>