<?php
namespace Admin\Controller;
/**
* 友情链接
*/
class LinkController extends CommonController
{

	public function _initialize()
	{
		parent::_initialize();
		$link_model = D("Links");
	}
	
	function index()
	{
		$links = $link_model->order(array("listorder"=>"asc"))->select();
		$this->assign("links",$links);
		$this->display();
	}

	public function add()
	{
		$this->display();
	}

	function add_post()
	{
		if(IS_POST){
			$data = I('');
			if($link_model->create($data)){
				$id = $link_model->add();
				if($id){
					$this->success("上传成功!",U('Link/index'));
				}else{
					$this->error("上传失败！");
				}
			}else{
				$link_model->getError();
			}
			
		}
	}

	public function edit()
	{
		$this->display();
	}

	public function edit_post()
	{
		if(IS_POST){
			$data = I('');
			if($link_model->create($data)){
				$id = $link_model->save($data);
				if ($id) {
					$this->success("修改成功！",U('Link/index'));
				}else{
					$this->error('修改失败！');
				}
			}else{
				$link_model->getError();
			}
		}
	}


}


?>