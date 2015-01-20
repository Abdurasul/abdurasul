<?php
include_once('controllers/model.php');
include_once('controllers/C_Base.php');
//
// 
//


class C_Views extends C_Base
{
	 protected $active;
	 protected $id;
	 protected $bemorho;
	 protected $limit;
	 protected $start;

	 protected $region;
	 protected $city;
	//$article = new Article();
	//
	//
	function __construct($city = '')
	{		
		$this->city = $city;
	}
	
	//
	//
	protected function OnInput()
	{
            $this->id = $_SESSION['uid'];
            
            parent::OnInput($this->active = 'view/');
            $this->title = 'Все больные';    
			
            $this->limit = 10;

			if (!isset($_GET['page']))
				$page = 0;
			else 
				$page = $_GET['page'];

            $this->start = $page * $this->limit;
             
			$this->bemorho = getByCity($this->city, $this->start, $this->limit);
			$this->region = getRegionByCityName($this->city);
	}
	
	//
	// Р’РёСЂС‚СѓР°Р»СЊРЅС‹Р№ РіРµРЅРµСЂР°С‚РѕСЂ HTML.
	//	
	protected function OnOutput()
	{
            $vars = array('bemor' => $this->bemorho, 'city' => $this->city, 'region' => $this->region);		
            $this->content = $this->Template('components/view/v_index.php', $vars);
			
            parent::OnOutput($this->active);
	}	
}
