<?php
include_once('controllers/model.php');
include_once('controllers/C_Base.php');
include_once('controllers/blank_'.$_SESSION['uid'].'/analysis.php');
//
// 
//
class C_Users extends C_Base
{
	 protected $active;
	 protected $id;
         protected $cities;
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
            
            parent::OnInput($this->active = 'blank_'.$this->id);
            $this->title = '��� �������';    
            
            
            $this->cities = getAllRegions();
	}
	
	//
	// Виртуальный генератор HTML.
	//	
	protected function OnOutput()
	{
            $vars = array('city'=> $this->cities);		
            $this->content = $this->Template('components/blank_'.$this->id.'/v_index.php', $vars);
			
            parent::OnOutput($this->active);
	}	
}
