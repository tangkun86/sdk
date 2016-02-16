<?php
return array(
	//'配置项'=>'配置值'
	// 允许访问的模块列表

	'MODULE_ALLOW_LIST'    =>    array('Home','Dev'),
	'DEFAULT_MODULE'       =>    'Home',  // 默认模块
	'LANG_SWITCH_ON' => 1,   // 开启语言包功能
	'LANG_SWITCH_PARAMETER' =>'language',
	'LANG_AUTO_DETECT' => true, // 自动侦测语言 开启多语言功能后有效
	'LANG_LIST'        => 'zh-cn,zh-tw,en-us', // 允许切换的语言列表 用逗号分隔
	'VAR_LANGUAGE'     => 'l', // 默认语言切换变量
//	 模块映射
//	'URL_MODULE_MAP'       =>    array('Dev'=>'Developer'),

	'URL_MODEL'=>2,
	'TMPL_ENGINE_TYPE' =>'PHP',
	'TMPL_TEMPLATE_SUFFIX'=>'.php',
//	'URL_HTML_SUFFIX' => false,
	/*
	'LAYOUT_ON'=>true,
	'LAYOUT_NAME'=>'Layout/layout',
	*/

	'AUTOLOAD_NAMESPACE' => array(
		'Api'     	=> COMMON_PATH.'Api',
		'Extcom'     => COMMON_PATH.'Extcom',
	),

	//数据库配置信息
	'DB_TYPE'   => 'mysql', // 数据库类型
	'DB_HOST'   => '119.6.241.91', // 服务器地址
	'DB_NAME'   => 'newnoobird', // 数据库名
	'DB_USER'   => 'root', // 用户名
	'DB_PWD'    => 'aviup@2016!AVIUP', // 密码
	'DB_PORT'   => 3306, // 端口
	'DB_PREFIX' => '', // 数据库表前缀
	'DB_CHARSET'=> 'utf8', // 字符集
	//
	//
	//本地
	// //数据库配置信息
	/*'DB_TYPE'   => 'mysql', // 数据库类型
	'DB_HOST'   => 'localhost', // 服务器地址
	'DB_NAME'   => 'newnoobird', // 数据库名
	'DB_USER'   => 'root', // 用户名
	'DB_PWD'    => '', // 密码
	'DB_PORT'   => 3306, // 端口
	'DB_PREFIX' => '', // 数据库表前缀
	'DB_CHARSET'=> 'utf8', // 字符集*/

	/* 模板相关配置 */
	/*'TMPL_PARSE_STRING' => array(
		'__STATIC__' => __ROOT__ . '/Public/static',
		'__IMG__'    => __ROOT__ . '/Public/' . MODULE_NAME . '/images',
		'__CSS__'    => __ROOT__ . '/Public/' . MODULE_NAME . '/css',
		'__JS__'     => __ROOT__ . '/Public/' . MODULE_NAME . '/js',
	),*/
);