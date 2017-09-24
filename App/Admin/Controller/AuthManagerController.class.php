<?php
namespace Admin\Controller;
use Admin\Model\AuthGroupModel;
/**
* 权限管理
*/
class AuthManagerController extends CommonController
{
	
	function index()
	{
		$Glist = D('AuthGroup');
		$this->Glist = $Glist->Grouplist();
		$this->display();
		
	}

	public function roleadd()
	{
		$this->display();
	}

	public function roleadd_post()
	{
		if (IS_POST) {
			$Glist = D('AuthGroup');
			if($Glist->create()){
				$result = $Glist->add();
				if($result){
					$this->success("添加成功！",U('AuthManager/index'));
				}else{
					$this->error("添加失败! ");
				}
			}else{
				exit($Glist->getError());
			}
		}
	}

	public function roleedit($id)
	{
		$Glist = D('AuthGroup');
		$this->group = $Glist->where('id='.$id)->find();
		$this->display();
	}

	public function roleedit_post()
	{
		if (IS_POST){
			$Glist = D('AuthGroup');
			if($Glist->create()){
				$result = $Glist->save();
				if($result){
					$this->success("修改成功！",U('AuthManager/index'));
				}else{
					$this->error("修改失败! ");
				}
			}else{
				exit($Glist->getError());
			}
		}
	}
	
	public function authrize($id)
	{
		$rules = array();		
		header("content-type:text/html;charset=utf8");
		$menuList  = M("AuthRule");
		$selfrule = M("AuthGroup")->field("rules")->where('id='.$id)->find();
		$selfrule = explode(',', $selfrule['rules']);

		$rule = $menuList->field(array("id,name,title,status,parentid"))->select();
		foreach ($rule as $k => $v) {
			$rules[$v['id']] = $v; 
		}
		
		foreach ($rules as $r => $u){
			$rules[$r]['checked'] = (_is_check($u['id'],$selfrule))? "checked" : "";
        	$rules[$r]['level'] = _get_level($u['id'],$rules);
        	$rules[$r]['parentid_node'] = ($u['parentid'])? 'data-tt-parent-id="'.$u['parentid'].'"':'';
		}

		
		import("tree");
		$tree = new \Tree();
		$tree->icon = array('│', '├─', '└─');
        $tree->nbsp = '&nbsp;&nbsp;&nbsp;';
		$tree->init($rules);
		$str ="<tr data-tt-id='\$id' \$parentid_node>					
					<td style ='padding-left:30px;'>\$spacer<input type='checkbox' name='rules[]' value='\$id' level='\$level' \$checked onclick='javascript:checknode(this);'> \$title</td>
				 </tr>";
		$rulefile = $tree->get_tree_str(0,$str);

		$this->assign('rulefile',$rulefile);
		$this->assign('gid',$id);
		$this->display();
	}

	public function authrize_post()
	{

		if (IS_POST) {
			$data=array();
			$data['id']= I("post.id");
			$authrize = I("post.rules");
			$data['rules'] = implode(',', $authrize);			
			$result = M('AuthGroup')->save($data);
			if($result){
				$this->success('设置成功',U('AuthManager/index'));
			}else{
				$this->error("设置失败",U('AuthManager/index'));
			}
			
		}
	}

	
}




?>