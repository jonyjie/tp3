<?php
namespace Admin\Controller;
use Admin\Controller\CommonController;

/**
* 空操作
*/
class EmptyController extends CommonController
{
	
	function index()
	{
		redirect('Public/login');
	}
}



?>