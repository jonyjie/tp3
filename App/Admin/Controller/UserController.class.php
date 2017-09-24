<?php
namespace Admin\Controller;
use Common\Controller\BaseController;
//use User\Controller\UserController;
/**
* 用户操作
*/
class UserController extends CommonController
{
	function _initialize()
	{
		parent::_initialize();
		$this->member_model = D('Common/Member');
	}
	public function index()
	{		
		$this->members = $this->member_model->where("type=1")->select();
		$this->display();
	}

	public function edit($id)
	{
		$id = (int) $id;
		if($id==1){
			$this->error("总管理无法删除");
		}
		$Glist = D('AuthGroup');
		$Grouplist = $Glist->Grouplist();
		$user = $this->member_model->field(array('id,username,password,user_email,status'))->where('id ='.$id)->find();
		$groupAccess = M('AuthGroupAccess')->field('group_id')->where("uid =".$id)->select();
		foreach ($groupAccess  as $v) {
			foreach ($Grouplist as $key => &$val) {
				if($val['id'] == $v['group_id']){
					$val['checked'] = "true";
				}
			}
		}
		//print_r($user);die();
		$this->assign('user',$user);
		$this->assign('glist',$Grouplist);
		$this->display();
	}

	public function add()
	{
		$Glist = D('AuthGroup');
		$this->Glist = $Glist->Grouplist();
		$this->display();
	}

	public function add_post()
	{
		if(IS_POST){			
			$data= array();
			$data['user_email'] = I("post.email");
			$data['username'] = I("post.username");
			$data['password'] = I("post.password");
			$data['status'] = I("post.status");			
			$opgroup  = I("post.group");
						
			if (!empty($opgroup) && is_array($opgroup)) {								
				if($this->member_model->create(&$data)){							
					$result = $this->member_model->add($data);					
					if ($result != false){						
						$access = M('AuthGroupAccess');
						foreach ($opgroup as $v) {							
							$access->add(array('uid'=>$result,'group_id'=>$v));							
						}						
					}else{
						$this->error("提交失败");
					}
				}else{
					exit($this->member_model->getError());
				}
			}else{
					$this->error("没有选择用户组");
			}
			
			
		}
	}

	public function edit_post()
	{
		if(IS_POST){
			$data =array();
			$data['id'] = I('post.id','intval');
			$data['username'] = I('post.username');
			$data['password'] = I('post.password');
			if(empty($data['password'])){unset($data['password']);}			
			$data['user_email'] = I('post.email');
			$data['status'] = I('post.status');
			$opgroup = I('post.group');						
			if (!empty($opgroup) && is_array($opgroup)) {
				if($this->member_model->create(&$data)){					
					$result = $this->member_model->save($data);
					if ($result !== false) {							
							$access = M('AuthGroupAccess');
							$access->where('uid='.$data['id'])->delete();							
							foreach ($opgroup as $v) {
								$access->add(array('uid'=>$data['id'],'group_id'=>$v));							
							}
							$this->success("修改成功！",U('User/index'));

						}else{
							
							$this->error("提交失败！");
						}	
				}else{
					
					exit($this->member_model->getError());
				}
			}else{
				
				$this->error("没有选择用户组");
			}
			
		}
	}

	
	public function del_user($id)
	{
		if($id==1){
			$this->error("总管理无法删除");
		}
	}



}




?>