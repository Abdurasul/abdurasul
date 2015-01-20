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

     
    <!--=== Include JS ===-->
    <script src="js/jquery-1.9.1.js"></script>
    <script src="style/js/bootstrap.js"></script>
    <script src="style/9.less-1.3.0.min.js"></script>
</head>
<body>
<div class="container-fluid">
     <div class="row">
		<div class="col-lg-12 header">
			<div class="row">
				<div class="col-lg-12 offset1">
					<div class="col-lg-1">
						<div class="logo"></div>
					</div>
					<div class="col-lg-4 ">
						<div class="logoTxt">
							Вазорати Тандурусти ва ҳифзи иҷтимоии аҳолии Ҷумҳурии Тоҷикистон<br> 
							пажӯҳишгоҳи Гастроэнтерология
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>

    <div class="row">
    	<? include ('navbar.php'); ?>	
    </div>
	
</div>

<div class="container-fluid">
    <div class="row">
   	 <form action="verify/login.php" method="post">
		<div class="col-lg-2 col-md-5 offset1" style="height: 230px; width: 230px; box-shadow: 3px 5px 10px rgba(0, 0, 0, .2) ; border: 1px solid rgba(0, 0, 0, .3); padding: 15px; border-radius: 3px; ">
			<div class="row">
				<div class="col-xs-12">
					<label for="">Логинро дароред: </label>
					<input type="text" class="form-control" placeholder="Логин" name="login">
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-xs-12">
					<label for="">Паролро дароред:</label>
					<input type="password" class="form-control" placeholder="Пароль" name="password">
				</div>
			</div>
			<br>
			<button type="submit" class="btn btn-success" name="submit">Даромад</button>
	 </form>
	</div>

		<div class="col-lg-6 col-md-7 offset1 window" style="padding: 15px;">
		    <? include('v_all.php'); ?>
		</div>
	</div>
		

	<div class="col-lg-2 col-md-4 offset1 ">	
	</div>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12" style="height: 50px ;"></div>
	</div>
</div>
</body>
</html>