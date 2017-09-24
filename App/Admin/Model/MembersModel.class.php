<?php
namespace Admin\Model;
use Common\Model\MemberModel;
/**
* 后台会员操作类
*/
class MembersModel extends MemberModel
{
	protected $tableName="Member";
	
	function checkLogin($where,$password)
	{

		$result = $this->where($where)->find();

			if(!empty($result) || $result['type']==1){
				
				if(tp_password($password,$result['password'])){
					if ($result['status']) {						
						return $result; //正确信息
					}else{
						return -2;// 用户被禁用了
					}

				}else{
					return -1;// 用户密码错误
				}	
			}else{
				return -3;//用户不存在或者不属于该分类
		}
		
	}
}

?>