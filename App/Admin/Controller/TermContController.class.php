<?php
namespace Admin\Controller;
/**
* 文章模型
*/
class TermContController extends CommonController
{
	public function _initialize()
	{
		parent::_initialize();
		$model = D('Term');
	}
	
	function index()
	{
		$this->display();
	}
	public function add()
	{
		$this->display();
	}

	public function add_post()
	{
		
	}

	public function edit()
	{
		$this->display();
	}

	public function edit_post()
	{
		
	}

	public function sort()
	{
		
	}
}




?>