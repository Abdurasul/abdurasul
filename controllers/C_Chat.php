<?php
include_once('controllers/model.php');
include_once('controllers/C_Base.php');
//
// 
//

class C_Chat extends C_Base
{
	 protected $active;
	 protected $id;
	 protected $finded;
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
            
            parent::OnInput($this->active = 'chat/');
            $this->title = 'Все больные';    
			
            if (isset($_GET['name']) && $_GET['name'] !='')
                $this->finded = find($_GET['name']);
                
	}
	
	//
	//	
	protected function OnOutput()
	{
            $vars = array('bemor' => $this->finded);		
            $this->content = $this->Template('components/chat/v_index.php', $vars);
			
            parent::OnOutput($this->active);
	}	
}
