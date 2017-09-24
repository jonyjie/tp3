<?php
namespace Admin\Model;
use Think\Model;
/**
* 权限操作
*/
class AuthGroupModel extends Model
{
	protected $_validate = array(
	 		array('title','require','名称不能为空',1,'regex',self::MODEL_BOTH),//不能为空
	 	);
	
	public function Grouplist()
	{
		return $this->field('id,title,status,remark')->select();
	}

}





?>