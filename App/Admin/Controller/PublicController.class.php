<?php
namespace Admin\Controller;
use Think\Controller;
/**
* 公共登录
*/
class PublicController extends Controller
{
	
	function login()
	{
		if(session('userLoginId')){redirect(U('Index/index'));}
		if(IS_POST){
			$name = I("post.username");
			$password = I("post.password");
			if (empty($name)) {
				$this->error("用户名不能为空");
			}
			if (empty($password)) {
				$this->error("密码不能为空！");
			}			
			
			if (stripos($username, "@")>0) {
				$where['user_email'] = $name;
			}else{
				$where['username'] = $name;
			}
			$user = D('Members');
			$data = $user->checkLogin($where,$password);
			
			switch ($data) {
				case -1:
					return $this->error("用户密码错误！");
					break;

				case -2:
					return $this->error("用户已经被禁用！");
					break;

				case -3:
					return $this->error("用户不存在！");
					break;
				
			}
			
			if ($data){
				session('userLoginId',$data['id']);
				session('username',$data['username']);
				$data['last_login_ip'] = get_client_ip(0,true);//获取用户真实IP
				$data['last_login_time'] = date("Y-m-d H:i:s");
				unset($data['password']);
				$user->save($data);//跟新登录信息
				//setcookie("username",$name,time()+30*24*3600,"/");
				$this->success("登录成功！^ ) ^",U("Index/index"));
			}else{
				$this->error("登录失败");
			}
			
		}else{
			$this->display();
		}
	}

	public function layout()
	{
		if(session('userLoginId')){            
           	//setcookie("username",null);
           	session('[destroy]');
            $this->success('退出成功！', U('login'));
        } else {
            $this->redirect('login');
        }
	}
}
?>