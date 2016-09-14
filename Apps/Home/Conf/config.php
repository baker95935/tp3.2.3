<?php
return array(
	//'配置项'=>'配置值'
	 
	 /* 模板相关配置 */
    'TMPL_PARSE_STRING' => array(
        '[!Static]' => __ROOT__ . '/Public/static',
        '[!Img]'    => __ROOT__ . '/Public/' . MODULE_NAME . '/images',
        '[!Css]'    => __ROOT__ . '/Public/' . MODULE_NAME . '/css',
        '[!Js]'     => __ROOT__ . '/Public/' . MODULE_NAME . '/js',
		'[!UploadImg]'=>__ROOT__.'uploads',
    ),

    /* 数据缓存设置 */
    'DATA_CACHE_PREFIX' => 'lawthink_', // 缓存前缀
    'DATA_CACHE_TYPE'   => 'File', // 数据缓存类型
    
    //过滤
    'DEFAULT_FILTER' => 'htmlspecialchars,stripslashes',

    'TOKEN_ON'      =>    true,  // 是否开启令牌验证 默认关闭
    'TOKEN_NAME'    =>    '__hash__',    // 令牌验证的表单隐藏字段名称，默认为__hash__
    'TOKEN_TYPE'    =>    'md5',  //令牌哈希验证规则 默认为MD5\
    'TOKEN_RESET'   =>    true,  //令牌验证出错后是否重置令牌 默认为true
    'TMPL_ACTION_ERROR'     =>  './erro', // 默认错误跳转对应的模板文件
    'TMPL_ACTION_SUCCESS'   =>  './success', // 默认成功跳转对应的模板文件
);