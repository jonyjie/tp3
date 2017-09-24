<?php
namespace Admin\Controller;
use Common\Controller\BaseController;
use Think\Auth;
/**
 * 后台基类
 */
 class CommonController extends BaseController
 {
 	
 	function _initialize()
 	{
 		parent::_initialize();

 		$this->assign('menus', $this->getmenus());
 	}


 	function _empty()
 	{
 		$this->display('Public:404');
 	}

 	protected function getmenus($pid=0)
 	{
 		import("tree");
 		$auth = new Auth();
 		$tree = new \Tree();	
 		$menus = M('Menu')->where("status = 1")->field(array("id,parentid,app,model,action,name,icon"))->order('sort asc')->select();

 		foreach ($menus as $key => &$value) { 			
 			$value['url'] =	$value['app']."/".$value['model']."/".$value['action']; 
 			
 			if( session('userLoginId') != 1 &&  !$auth->check(strtolower($value['url']),session('userLoginId'))){	
 				unset($menus[$key]);
 			}			

 		}
 		$tree->init($menus);
 		$menu = $tree->get_tree();
 		
 		return $menu;

 	}

 	

    
 }
 ?>