<?php
include_once('controllers/model.php');
include_once('controllers/C_Base.php');
//
// 
//

class C_Profile extends C_Base
{
	 protected $active;
	 protected $id;
	 protected $bemorInfo;
	//$article = new Article();
	//
	//
	function __construct()
	{		
	}
	
	//
	//
	protected function OnInput()
	{
            $this->id = $_SESSION['uid'];
            
            parent::OnInput($this->active = 'profile/');
            $this->title = 'Все больницы';    
			
	}
	
	//
	// Ð’Ð¸Ñ€Ñ‚ÑƒÐ°Ð»ÑŒÐ½Ñ‹Ð¹ Ð³ÐµÐ½ÐµÑ€Ð°Ñ‚Ð¾Ñ€ HTML.
	//	
	protected function OnOutput()
	{
            $vars = array('bemor' => $this->bemorInfo);		
            $this->content = $this->Template('components/profile/v_index.php', $vars);
			
            parent::OnOutput($this->active);
	}	
}
