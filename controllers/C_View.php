<?php
include_once('controllers/model.php');
include_once('controllers/C_Base.php');
//
// 
//


class C_View extends C_Base
{
	 protected $active;
	 protected $id;
	 protected $bemorho;
	 protected $limit;
	 protected $start;
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
            
            parent::OnInput($this->active = 'all/');
            $this->title = 'Все больные';    
			
            $this->limit = 10;

			if (!isset($_GET['page']))
				$page = 0;
			else 
				$page = $_GET['page'];

            $this->start = $page * $this->limit;
             
			$this->bemorho = getAll($this->start, $this->limit);
	}
	
	//
	// Р’РёСЂС‚СѓР°Р»СЊРЅС‹Р№ РіРµРЅРµСЂР°С‚РѕСЂ HTML.
	//	
	protected function OnOutput()
	{
            $vars = array('bemor' => $this->bemorho);		
            $this->content = $this->Template('components/all/v_index.php', $vars);
			
            parent::OnOutput($this->active);
	}	
}
