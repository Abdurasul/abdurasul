<?php
include_once('controllers/model.php');
include_once('controllers/C_Base.php');
//
// 
//
class Statistics {
	public $region;
	public $city;
	public $countWomen;
	public $countMan;
}
class C_Stats extends C_Base
{
	 protected $active;
	 protected $id;
	 protected $CountOfSex;
	 protected $stats;
	 protected $region;
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
            
            parent::OnInput($this->active = 'stats/');
            $this->title = 'Все больные';   

            $this->CountOfSex = getAllSicks(); 

            $statistics[] = new Statistics();
            $count = 0;

            $regions = getAllRegions();
            $this->region = $regions;

            
            $this->stats = $statistics;
	}
	
	//
	//	
	protected function OnOutput()
	{
            $vars = array('CountOfSex' => $this->CountOfSex, 
            					'region' => $this->region , 
            					'stats' => $this->stats);

            $this->content = $this->Template('components/stats/v_index.php', $vars);
			
            parent::OnOutput($this->active);
	}	
}
