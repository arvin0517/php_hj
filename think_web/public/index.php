<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// [ 应用入口文件 ]

// 定义应用目录
define('APP_PATH', __DIR__ . '/../app/');  //在这里，将“application” 修改为 “app”, 再将application文件夹名称修改为app文件夹名称，方便理解命名空间

//自定义配置文件目录：自创的  ,与app目录同级
define('CONF_PATH', __DIR__. '/../conf/');


// 绑定入口文件  绑定模块
//define('BIND_MODULE', 'admin/index');


// 加载框架引导文件
require __DIR__ . '/../thinkphp/start.php';
