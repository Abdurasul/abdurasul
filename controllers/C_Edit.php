<?php
include_once('controllers/model.php');
include_once('controllers/C_Base.php');
//
// 
//

class C_Edit extends C_Base
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
            
            parent::OnInput($this->active = 'edit/');
            $this->title = '��� �������';    
			
			if (isset($_GET['id']))
				$this->bemorInfo = getBemorInfo($_GET['id']);

	}
	
	//
	// Виртуальный генератор HTML.
	//	
	protected function OnOutput()
	{
            $vars = array('bemor' => $this->bemorInfo);		
            $this->content = $this->Template('components/edit/v_index.php', $vars);
			
            parent::OnOutput($this->active);
	}	
}
