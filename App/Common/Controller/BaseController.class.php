<?php
namespace Common\Controller;
use Think\Controller;
use Think\Auth;
/**
* 基类
*/
class BaseController extends Controller
{
	
	function _initialize()
	{
		$this->is_login();

		//print_r(strtolower(MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME));die();
		if (session('userLoginId')==1) {
			return session('userLoginId');
		}else{
			$auth = new Auth();
			$nums = $auth->check(strtolower(MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME) ,session('userLoginId'));
			
			if (!$nums) {
				$this->error('未被授权',U('Index/index'));
			}			
		}

	}

	public function is_login()
	{
		if(!session('userLoginId')>0){
			$this->error("登录失败",U('Public/login'));
		}
	}
}

?>