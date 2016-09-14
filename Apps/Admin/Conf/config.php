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
    
);