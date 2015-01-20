<?php
include_once('controllers/model.php');
include_once('controllers/C_Base.php');
//
// 
//

class C_Search extends C_Base
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
            
            parent::OnInput($this->active = 'edit/');
            $this->title = 'Все больные';    
			
            if (isset($_GET['name']) && $_GET['name'] !='')
                $this->finded = find($_GET['name']);
                
	}
	
	//
	//	
	protected function OnOutput()
	{
            $vars = array('bemor' => $this->finded);		
            $this->content = $this->Template('components/search/v_index.php', $vars);
			
            parent::OnOutput($this->active);
	}	
}
