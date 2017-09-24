<?php
namespace Common\Model;
use Common\Model\CommonModel;
/**
* 用户操作模型
*/
class MemberModel extends CommonModel
{
	
	protected $_validate = array(
		//验证字段
		array('username','checkName','账号名称不能为空',1,'function',CommonModel::MODEL_INSERT),//在插入字段是验证不能为空
		array('password','passwords','密码不能为空',1,'function',CommonModel::MODEL_INSERT),//密码不能为空
		array('username','require','用户名已占用',1,'unique',CommonModel::MODEL_BOTH),//插入或者修改字段时验证是否唯一
		array('user_email','','用户邮箱已存在',0,'unique',CommonModel::MODEL_BOTH),		
		array('user_tel','email','用户邮箱格式不正确！',0,'',CommonModel::MODEL_BOTH),

	);

	protected $_auto = array(
		array('register_time','mGetDate',CommonModel::MODEL_INSERT,'callback'),
		
	);

	public function mGetDate()
	{
		return date('Y-m-d H:i:s');
	}

	protected function _before_write(&$data) {
		parent::_before_write($data);

		if (!empty($data['password'])) {
			$data['password'] =  md5(md5($data['password']).C('PWD_PREFIX'));
		}
	}
	
}


?>