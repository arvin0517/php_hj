<?php

   return[
   
           //视图输出字符串内容替换
             'view_replace_str' => [
                
                  '_IMG_' => '/think_blog/public/static/img'
             ],
             
           //重新配置session, 来覆盖掉惯例配置convention.php的session配置
            'session'  => [

                    'id'             => '',
                    // SESSION_ID的提交变量,解决flash上传跨域
                    'var_session_id' => '',
                    // SESSION 前缀
                    'prefix'         => 'think',
                    // 驱动方式 支持redis memcache memcached
                    'type'           => '',
                    // 是否自动开启 SESSION
                    'auto_start'     => true,
                    //'httponly'       => true,   //删除这两行代码就可以保存session的值
                    //'secure'         => true,   //删除这两行代码就可以保存session的值
                ],
   
   ]
?>