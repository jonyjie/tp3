<?php
namespace Admin\Controller;
//use Admin\CommonCtroller;
/**
* 后台菜单操作/模块添加
*/
class MenuController extends CommonController
{
	
	function index()
	{
		$newmenu = array();	
		$menu = M("Menu")->order("sort desc")->select();
		import("tree");
		$tree = new \Tree();
		$tree->icon = array('│ ', '├─ ', '└─ ');
        $tree->nbsp = '&nbsp;&nbsp;&nbsp;';
        foreach ($menu as $k => $v) {
        	$newmenu[$v['id']] = $v;
        }
        
        foreach ($newmenu as $key => $val) {
        	$newmenu[$key]['status'] = $val['status']?L('DISPLAY'):L('HIDDEN');
        	$newmenu[$key]['level'] = $this->_get_level($val['id'],$newmenu);
        	$newmenu[$key]['parentid_node'] = ($val['parentid'])? 'data-tt-parent-id="'.$val['parentid'].'"':'';
        	$newmenu[$key]['marget'] = '<a href="'.U("Menu/add",array('parentid'=>$val['id'])).'" role="button" class="btn btn-warning btn-xs">添加子栏目</a>&nbsp;<a href="'.U("Menu/edit",array('id'=>$val['id'])).'" role="button" class="btn btn-warning btn-xs">编辑</a>&nbsp;<a href="'.U("Menu/del",array('id'=>$val['id'])).'" role="button" class="btn btn-success btn-xs">删除</a>';
        }
      
		$tree->init($newmenu);
		
		$str ="<tr data-tt-id='\$id' \$parentid_node>
					
                    <td ><input type='text' name='sort' value='\$id' style='width:50px;' /></td>
                    <td>\$id</td>
                    <td>\$app/\$model/\$action</td>
                    <td>\$spacer\$name</td>                    
                    <td>\$status</td>
                    <td>
                      \$marget
                    </td>
                  </tr>";
		$this->menuslist = $tree->get_tree_str(0,$str);
		
		$this->display();
	}


	public function add()
	{
		$pid = I('get.parentid') ? I('get.parentid'):0;	

		$menu = M("Menu")->field(array("id,parentid,name"))->order("sort desc")->select();
		import("tree");
		$tree = new \Tree();
		$tree->icon = array('│ ', '├─ ', '└─ ');
        $tree->nbsp = '&nbsp;&nbsp;&nbsp;';
        foreach ($menu as $k => $v) {
        	$newmenu[$v['id']] = $v;
        }
        $tree->init($newmenu);
		
		$str ="<option value='\$id' \$selected>\$spacer\$name</option>";
		$this->menuslist = $tree->get_tree_str(0,$str,$pid);
		$this->display();
	}

	public function add_post()
	{
		$menu = M("Menu");
		$id = $menu->add($_POST);
		if ($id) {
			$this->success("添加成功！",U("Menu/index"));
		}else{
			$this->error("添加失败！");
		}
	}

	public function edit()
	{
		$id =I('get.id');
		$menu = M("Menu")->where('id = '.$id)->find();
		$menus = M("Menu")->field(array("id,parentid,name"))->order("sort desc")->select();
		import("tree");
		$tree = new \Tree();
		$tree->icon = array('│ ', '├─ ', '└─ ');
        $tree->nbsp = '&nbsp;&nbsp;&nbsp;';
        $newmenu = array();
        foreach ($menus as $k => $v) {
        	$newmenu[$v['id']] = $v;
        }
        $tree->init($newmenu);		
		$str ="<option value='\$id' \$selected>\$spacer\$name</option>";
		$this->menuslist = $tree->get_tree_str(0,$str,$menu['parentid']);
		$this->assign("menu",$menu);
		$this->display();

	}

	public function edit_post()
	{
		$menu = M("Menu");
		$id = $menu->save($_POST);
		if($id){
			$this->success("修改成功！",U('Menu/index'));
		}else{
			$this->error("修改失败！");
		}
		
	}

	protected function _get_level($id, $arr = array() , $i=0)
	{
		
		if($arr[$id]['parentid'] == 0 || empty($arr[$arr[$id]['parentid']]) || $arr[$id]['parentid'] == $id){
			return $i;
		}else{
			$i++;
			return $this->_get_level($arr[$id]['parentid'],$arr,$i);
		}
	}
}
?>