<?php
return array(
	//'配置项'=>'配置值'
	//'TMPL_FILE_DEPR'        =>  '_', //模板文件CONTROLLER_NAME与ACTION_NAME之间的分割符
	'TMPL_L_DELIM'          =>  '{',            // 模板引擎普通标签开始标记
	'TMPL_R_DELIM'          =>  '}',            // 模板引擎普通标签结束标记
	
	'SHOW_PAGE_TRACE'		=>	true,
	//模板样式文件配置
	'TMPL_PARSE_STRING' => array(
			'__CSS__'	=>	__ROOT__."/Public/".MODULE_NAME."/css/",
			'__IMG__'	=>	__ROOT__."/Public/".MODULE_NAME."/images/",
			'__JS__'	=>	__ROOT__."/Public/".MODULE_NAME."/js/",
			'__FONTS__'	=>	__ROOT__."/Public/".MODULE_NAME."/font-awesome/",


		),

	'LANG_SWITCH_ON' => true,// 开启语言包功能

	'LANG_AUTO_DETECT' => true, // 自动侦测语言 开启多语言功能后有效
	'DEFAULT_LANG'          =>  'zh-cn', // 默认语言
	'LANG_LIST'        => 'zh-cn', // 允许切换的语言列表 用逗号分隔
	'VAR_LANGUAGE'     => 'l', // 默认语言切换变量
	/*'TMPL_LAYOUT_ITEM'      =>  '{__CONTENT__}', // 布局模板的内容替换标识
	'LAYOUT_ON'             =>  true, // 是否启用布局
	'LAYOUT_NAME'           =>  'Public/common', // 当前布局名称 默认为layout*/
	'URL_CASE_INSENSITIVE'  =>  true,   // 默认false 表示URL区分大小写 true则表示不区分大小写
	'URL_MODEL'             =>  2,       // URL访问模式,可选参数0、1、2、3,代表以下四种模式：
);