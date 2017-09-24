<?php
namespace Admin\Controller;

/**
* 站点设置
*/
class SettingController extends CommonController
{
	
	public function site()
	{
		$arr = array();
		$sett = M("Option");
		$settOp = $sett->select();
		foreach ($settOp as $k => $v) {
			if(!empty($v)){
				$v['extra'] = json_decode($v['extra'],true);
			 	$arr[strtolower($v['name'])] = $v;
		 	}

		 }
		$this->assign("oparr",$arr);
		$this->display();
	}

	public function site_post()
	{
		//print_r($_POST);die();
		$sett = M("Option");
		foreach ($_POST as $k => $v) {					
			$id = $sett->where("id=".$v['id'])->save(array('option_value'=> $v['data']));			
		}		
		$this->success("修改成功！",U("Setting/site"));

	}

	public function password()
	{

		$this->display();
	}

	public function userinfo()
	{
		$this->display();
	}

}

?>