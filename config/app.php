<?php
// +----------------------------------------------------------------------
// | 应用设置
// +----------------------------------------------------------------------

return [
    // 应用地址
    'app_host'         => env('app.host', ''),
    // 应用的命名空间
    'app_namespace'    => '',
    // 是否启用路由
    'with_route'       => true,
    // 是否启用事件
    'with_event'       => true,
    // 默认应用
    'default_app'      => 'index',
    // 默认时区
    'default_timezone' => 'Asia/Shanghai',

    /*
    // 域名绑定（自动多应用模式有效）
    'domain_bind'      => [
    	'blog'        =>  'blog',  //  blog子域名绑定到blog应用
	    'shop.tp.com' =>  'shop',  //  完整域名绑定
	    '*'           =>  'home', // 二级泛域名绑定到home应用
    ],
    // 禁止URL访问的应用列表（自动多应用模式有效）
    'deny_app_list'    => [
    	'common'
    ],	
    //应用映射
    'app_map' => [
    	'think' =>  'admin',  
    	'home'  =>  'index',  
    	'*'     =>  'index',  
	],
	*/
    
    // 异常页面的模板文件
    'exception_tmpl'   => app()->getThinkPath() . 'tpl/think_exception.tpl',

    // 错误显示信息,非调试模式有效
    'error_message'    => '页面错误！请稍后再试～',
    // 显示错误信息
    'show_error_msg'   => false,
];
