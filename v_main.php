<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title></title>

	<!-- Include styles -->
	<link rel="stylesheet" href="style/css/bootstrap.css">
	<link rel="stylesheet/less" href="style/main.less">
	<link rel="stylesheet" href="style/tpl.css">
	<link href='http://fonts.googleapis.com/css?family=McLaren|Ruluko|Playfair+Display+SC|Cinzel&subset=latin,latin-ext,cyrillic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
     
    <!--=== Include JS ===-->
    <script src="js/xmlhttprequest.js"></script>	
    <script src="js/myjs.js"></script>
    <script src="json2.js"></script>
    <script src="js/jquery-1.9.1.js"></script>
    <script src="js/blur.js"></script>
    <script src="style/js/bootstrap.js"></script>
    <script src="style/9.less-1.3.0.min.js"></script>

    <script>
    </script>
</head>
<body>
<div class="container-fluid">
    <div class="row">
		<div class="col-lg-12 header">
			<div class="row">
				<div class="col-lg-11 col-lg-offset-1">
					<div class="">
						<div class="logo"></div>
					</div>
					<div class="col-lg-5  col-sm-6 col-sm-offset-2 col-md-6 col-md-offset-1 col-xs-11 col-xs-offset-3">
						<div class="logoTxt">
							Вазорати Тандурусти ва ҳифзи иҷтимоии аҳолии Ҷумҳурии Тоҷикистон<br>
							пажӯҳишгоҳи Гастроэнтерология
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
</div>
<div class="container-fluid">	 
    <div class="row">
    	<? include ('components/'.$active.'/navbar.php'); ?>	
    </div>
</div>


<div class="container">
    <div class="row" >
		<div class="col-lg-2 col-lg-offset">
			<ul class="nav nav-pills nav-stacked">
  				<li class="active" id='one'><a href="index.php"><span class="glyphicon glyphicon-th-large"></span> Асосӣ</a></li>
  				<li id='two'><a href="?option=profile"><span class="glyphicon glyphicon-link"></span> Профиль</a></li>
  				<li id='three'><a href="?option=chat"><span class="glyphicon glyphicon-send"></span> Сообщения</a></li>
  				<li id='four'><a href="?option=filter"><span class="glyphicon glyphicon-search"></span> Фильтр поиска</a></li>
			</ul>
			<br>
			<? include('blocks/SideLeft.php'); ?> 
		</div>
		
		<div class="col-lg-7 col-md-7 col-lg-offset-1 window" style="padding: 15px;">
			<?=$content; ?>
		</div>
		
		<div class="col-lg-1 col-md-4 col-lg-offset-1">	
			<? include('blocks/SideRight.php'); ?>
		</div>
		
	</div>
</div>
<br>

<div class="container-fluid ">
	<div class="row">
		<div class="col-lg-12" style="height: 50px ; background: linear-gradient(#428BCA 35%, #54B6FC);">
			
		</div>
	</div>
</div>

</body>
</html>