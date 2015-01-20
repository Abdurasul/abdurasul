<?
session_start();

?>
<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Навигасия</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="name"><a href=""><span class="glyphicon glyphicon-home"></span> Гастроэнтерология</a></li>
		<!--<li class="dropdown">
          <a href="" class="dropdown-toggle" data-toggle="dropdown">Menu <b class="caret"></b></a>
          <ul class="dropdown-menu">
			<li class="divider"></li>
            <li><a href="">
				Menu
			</a></li>
            <li class="divider"></li>
            <li class="relative"><a href="?option=claims&type=0"><div class="notification"></div>Menu</a></li>
			<li class="divider"></li>
          </ul>
        </li>-->
		<li ><a href="index.php"><span class="glyphicon glyphicon-plus-sign"></span> Илова кардан</a></li>
		<li class="active"><a href="?option=viewAll"><span class="glyphicon glyphicon-check"></span> Рӯйхати беморҳо</a></li>
    <li><a href="?option=stats"><span class="glyphicon glyphicon-stats"></span> Статистика</a></li>
		
      </ul>
	  
	<form class="navbar-form navbar-left" role="search" method="GET" action="index.php">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Ному насаби бемор" name="name">
                <input type="hidden" name="option" value="search">
            </div>
        <button type="submit" class="btn btn-default">Ҷустуҷу</button>
		
      </form>
	   <ul class="nav navbar-nav navbar-right">
		  <li class=""><a href=""><span class="glyphicon glyphicon-user"></span> <?=$_SESSION['lastname'].' '.$_SESSION['name']; ?></a></li>
		  <li class=""><a href="verify/logout.php"><span class="glyphicon glyphicon-log-out"></span> Баромадан аз барнома</a></li>
		</ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>