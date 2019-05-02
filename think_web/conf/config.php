<?php
    use think\Env;
     //我们可以在应用配置这里修改某个参数的值来覆盖惯例配置convention.php中参数的值
     // return [

     //         'app_status' => 'home', //场景配置，这里默认为‘home’

            
     //         'app_email' => '1095654362@qq.com',
     //         'app_author' => 'Arvin',

     //         // 应用调试模式
     //         //'app_debug' => false,   //我们可以在应用配置这里修改某个参数的值来覆盖惯例配置convention.php中参数的值
     // ]


      //利用.env环境配置 搭配场景配置
      return[
 
          'app_status' => Env::get('app_status','dev') ,//当没有为‘app_status’配置值时，默认赋值‘dev’

          // 入口自动绑定模块
            'auto_bind_module'  => true,

          // 是否开启路由
            'url_route_on'  =>  true,

          // 是否强制使用路由
            'url_route_must' => false,

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

            //模板配置
            'template'               => [
                    // 模板引擎类型 支持 php think 支持扩展
                    'type'         => 'Think',
                    // 视图基础目录，配置目录为所有模块的视图起始目录
                    'view_base'    => '',
                    // 当前模板的视图目录 留空为自动获取
                    'view_path'    => '',
                    // 模板后缀
                    'view_suffix'  => 'html',
                    // 模板文件名分隔符
                    'view_depr'    => DS,
                    // 模板引擎普通标签开始标记
                    'tpl_begin'    => '{',
                    // 模板引擎普通标签结束标记
                    'tpl_end'      => '}',
                    // 标签库标签开始标记
                    'taglib_begin' => '{',
                    // 标签库标签结束标记
                    'taglib_end'   => '}',

                    'layout_on' => true, //开启layout功能,在所有的模板中都有效
                    'layout_name' => 'layout'  
                ],

             //视图输出字符串内容替换
             'view_replace_str' => [
                
                  'STATIC2' => '这是static2替换后的内容',
                   'STATIC3' => '这是static3替换后的内容'
             ],

             //自己创建一个数据库配置

                   'db_config01' => [
                      
                         // 数据库类型
                      'type'            => 'mysql',
                      // 数据库连接DSN配置
                      'dsn'             => '',
                      // 服务器地址
                      'hostname'        => '127.0.0.1', //本机：127.0.0.1
                      // 数据库名
                      'database'        => 'imooc_course4',
                      // 数据库用户名
                      'username'        => 'root',
                      // 数据库密码
                      'password'        => '123456',
                      // 数据库连接端口
                      'hostport'        => '3306',
                      // 数据库连接参数
                      'params'          => [],
                      // 数据库编码默认采用utf8
                      'charset'         => 'utf8',
                      // 数据库表前缀
                      'prefix'          => '',     //同一个数据库中：数据库表前缀，我们可以通过它来给我们的表添加前缀
                   ],
      ]


?>