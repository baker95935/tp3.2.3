<?php
return array(
	//'配置项'=>'配置值'
	'URL_CASE_INSENSITIVE'       => false,//大小写敏感
	'LOAD_EXT_CONFIG'            => 'db',//加载其他配置文件
	'MODULE_DENY_LIST'           => array('Common','Runtime'),//禁止访问的列表
	'MODULE_ALLOW_LIST'          => array('Home','Admin'),//可以访问的列表
	'SHOW_PAGE_TRACE'            => true,//网页跟踪信息

    'URL_MODEL'                  => '2', //URL模式
    'SESSION_AUTO_START'         => true, //是否开启session
	 
	'DEFAULT_FILTER'             =>  'htmlspecialchars,strip_tags', // 默认参数过滤方法 用于I函数...
	
	'view_filter'                => array('Behavior\TokenBuildBehavior'),//表单令牌验证
	'TOKEN_ON'                   => true,  // 是否开启令牌验证 默认关闭
	'TOKEN_NAME'                 => '__hash__',    // 令牌验证的表单隐藏字段名称，默认为__hash__
	'TOKEN_TYPE'                 => 'md5',  //令牌哈希验证规则 默认为MD5
	'TOKEN_RESET'                => true,  //令牌验证出错后是否重置令牌 默认为true
	
);