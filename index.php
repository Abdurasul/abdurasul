<?php
    include_once('config/startup.php');
    include_once('controllers/C_Main.php');
    include_once('controllers/C_Users.php');
    include_once('controllers/C_View.php');
    include_once('controllers/C_Edit.php');
    include_once('controllers/C_Add_Analysis.php');
    include_once('controllers/Ñ_Search.php');
    include_once('controllers/C_Stats.php');
    include_once('controllers/C_Profile.php');
    include_once('controllers/C_Chat.php');
    include_once('controllers/C_Filter.php');
    include_once('controllers/C_Views.php');
    

if (isset($_GET['option']))
{
    if ($_GET['option'] == 'edit')
    {
        $controller = new C_Edit();
    }
    else if ($_GET['option'] == 'add')
    {
		$controller = new C_Add_Analysis();
    }
    else if ($_GET['option'] == 'search')
    {
        $controller = new C_Search();
    }
	else if ($_GET['option'] == 'stats')
	{
		$controller = new C_Stats();
	}
    else if ($_GET['option'] == 'profile')
    {
        $controller = new C_Profile();
    }
    else if ($_GET['option'] == 'chat')
    {
        $controller = new C_Chat();
    }
    else if ($_GET['option'] == 'filter')
    {
        $controller = new C_Filter();
    }
    else if ($_GET['option'] == 'view')
    {
        $controller = new C_Views($_GET['city']);
    }
    else 
    {
        $controller = new C_View();
    }
}

else if ($_SESSION['uid'] != '')
{
    $controller = new C_Users();
}
else if ($_SESSION['uid'] == '' || $_SESSION['c_control'] == 'true')
{
    $_SESSION['c_control'] == '';
    $controller = new C_Main();
}
	
	

$controller->Request();
   
    