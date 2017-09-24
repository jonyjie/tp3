<?php
return array(
	//'配置项'=>'配置值'
	'DEFAULT_CHARSET'       =>  'utf-8', // 默认输出编码
	'LOAD_EXT_CONFIG'	=>	'db',//加载db 配置
	'DEFAULT_MODULE'        =>  'Admin',//默认登录模块admin
	'PWD_PREFIX'			=>	'jonyjie',	//随机加密码,
	//'SHOW_PAGE_TRACE'	=> true,
	'AUTH_CONFIG' => array(
	    'AUTH_ON' => true, //认证开关
	    'AUTH_TYPE' => 1, // 认证方式，1为时时认证；2为登录认证。
	    'AUTH_GROUP' => 'tp_auth_group', //用户组数据表名
	    'AUTH_GROUP_ACCESS' => 'tp_auth_group_access', //用户组明细表
	    'AUTH_RULE' => 'tp_auth_rule', //权限规则表
	    'AUTH_USER' => 'tp_member'//用户信息表
	  )

);