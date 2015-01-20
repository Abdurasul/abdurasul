<?php
include_once('controllers/model.php');
include_once('controllers/C_Base.php');
//
// Конттроллер страницы чтения.
//
class C_Main extends C_Base
{
	protected $active;
	 protected $submit ;
	 protected $text;
	 protected $bemor;
	 protected $limit;
	 protected $start;
	//$article = new Article();
	//
	// Конструктор.
	//
	function __construct()
	{		
	}
	
	//
	// Виртуальный обработчик запроса.
	//
	protected function OnInput()
	{
		
		//parent::OnInput();
		$this->title = 'Главная страница';
		
		$this->limit = 10;

			if (!isset($_GET['page']))
				$page = 0;
			else 
				$page = $_GET['page'];

            $this->start = $page * $this->limit;

		$this->bemor = getAll($this->start, $this->limit);
		
	}
	
	//
	// Виртуальный генератор HTML.
	//	
	protected function OnOutput()
	{
		$vars = array('article' => $this->article, 'result' => $this->result, 'bemor' => $this->bemor);			
			$this->content = $this->Template('v_index.php', $vars);
		
        echo $this->content;
		//parent::OnOutput();
	}	
}
