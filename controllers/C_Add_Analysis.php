<?php
include_once('controllers/model.php');
include_once('controllers/C_Base.php');
include_once('controllers/blank_'.$_SESSION['uid'].'/analysis.php');
//
// 
//
class C_Add_Analysis extends C_Base
{
	 protected $active;
	 protected $id;
	 protected $sid;
	 protected $story;
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
            $this->title = 'Все больные';    
			
			$this->sid = $_GET['id'];
			$this->story = 0;

			if ($this->id == 16) {
				if (checkAnalisys($this->sid) == '1');
					$this->story = getStory($this->sid);
			}

	}
	
	//
	// Р’РёСЂС‚СѓР°Р»СЊРЅС‹Р№ РіРµРЅРµСЂР°С‚РѕСЂ HTML.
	//	
	protected function OnOutput()
	{
            $vars = array('bemor'=> getBaseInfo($this->sid), 'story' => $this->story);		
            $this->content = $this->Template('components/blank_'.$this->id.'/v_index.php', $vars);
			
            parent::OnOutput($this->active);
	}	
}
