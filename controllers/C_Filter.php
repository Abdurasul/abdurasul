<?php
include_once('controllers/model.php');
include_once('controllers/C_Base.php');
//
// 
//

class C_Filter extends C_Base
{
	 protected $active;
	 protected $id;
	 protected $bemorho;
	 protected $region;
	 protected $city;
	 protected $sex;
	 protected $age;
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
            
            parent::OnInput($this->active = 'filter/');
            $this->title = 'Все больные';  

            if (isset($_POST['submit']))
            {
                $region = $_POST['region'];
                $city = $_POST['city'];
                $sex = $_POST['sex'];
                $age = $_POST['age'];

                $r = getRegionNameById($region);
                $c = getCityNameById($city);

                $region = $r->name;
                $city = $c->name;

                $this->region = $region;
                $this->city = $city;
                $this->sex = $sex;
                $this->age = $age;
                
                $this->bemorho = filter($region, $city, $sex, $age);
            }
                
	}
	
	//
	//	
	protected function OnOutput()
	{
		if (isset($_POST['submit'])) {
			$vars = array('bemor' => $this->bemorho, 
						  'region' => $this->region,
						  'city' => $this->city,
						  'sex' => $this->sex,
						  'age' => $this->age);
			
            $this->content = $this->Template('components/filter/result.php', $vars);
		}
        
        else {
            $vars = array('bemor' => $this->finded);		
            $this->content = $this->Template('components/filter/v_index.php', $vars);
        }
			
            parent::OnOutput($this->active);
	}	
}
