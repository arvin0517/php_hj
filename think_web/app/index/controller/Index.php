<?php
 //namespace app\index\controller;

// // class Index
// // {
// //     public function index()
// //     {
// //         return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_bd568ce7058a1091"></thinkad>';
// //     }
// // }

// use app\common\controller\Index as commonIndex; 
// use think\Config ;
// use think\Env;
// class Index {

// 	// public function index(){

// 	// 	return  "this is index index index";
// 	// }

// 	// public function common(){

//    //        $common = new commonIndex();
//    //        return "index_common: ". $common->index();
// 	// 	//return "this is index index common";
// 	// }

// 	   public function __construct(){

// 	   	  config('before','beforAction');  //这就是动态配置
// 	   }

// 	   public function index(){


//           //config('indexAction','index');
// 	   	  //dump(config());  //返回应用当前的所有配置

// 	      //用以下例子说明应用配置是如何覆盖惯例配置的
//           // $conf1 = [ 'username' => 'zhengwei'];
//           // $conf2 = [ 'username' => 'arvin'];
//           // $conf3 = [ 'user' => 'ben'];
//           // dump( array_merge( $conf1, $conf2,$conf3));


// 	   	   // $res = Config::get();  //获取全部的配置参数
// 	   	   // $res = config();       //config助手  获取全部的配置参数

//         //    $res = Config::get('app_namespace');  //获取‘app_namespace’这个配置的值
//         //    $res = config('app_namespace');       //使用config助手  也是获取‘app_namespace’这个配置的值

//         //    Config::set('usernames','arvin');     //设置‘username’这个配置的值
//         //    config('usernames', 'arvin');         //使用config助手  也是设置‘username’这个配置的值
 
//         //    Config::set('usernames','arvin','index');  //设置‘username’这个配置的值，但这个值仅在index作用域下有效
//         //    config('username', 'index_config', 'index'); //使用config助手  也是设置‘username’这个配置的值，但这个值仅在index作用域下有效

//            // $res = Config::has('username');  //判断是否存在‘username’这个配置
//            // $res = config('?username');      //使用config助手 也是判断是否存在‘username’这个配置
//            //dump($res);

// 	   	   //环境变量的配置的使用

//               //  dump($_ENV);
// 	   	      //  dump($_ENV["PHP_EMAIL"]);  //用这个方法取值，如果我们没有提前配置好‘PHP_EMAIL’的值，程序会报错
//               //  $res = Env::get('email');    //用这个方法取值，如果我们没有提前配置好‘PHP_EMAIL’的值，程序会返回null
//               //  $res = Env::get('email_name','default'); //当‘email_name’为null时,默认赋‘default’值
//               // dump($res);

// 	   	    //dump(config());
// 	   }

// 	   public function info($id){


//             echo url('index/index/index', ['id'=>10]) . "<br>";
//             echo url('index/index/info', ['id'=>10]) . "<br>";
// 	        return "{$id}"	;   //这个需要有双引号能输出变量$id的值，如果用单引号，这只会输出字符串 ‘$id’  
// 	                            // http://localhost/think_web/public/index/index/info/id/5    访问info方法，并传参数为5
//                                 // 如果我们想以   localhost/think_web/public/news/5.html 访问info方法，并传参数为5 , 则需要开启并设置路由 

// 	   }


// 	   public function demo(){

// 	   	  //dump(config());
//             return 'demo';
// 	   }
// }



// 以下将是第4章的内容，我们先将上面的代码全部注释掉
//================  第4章 请求和响应 ======================================

	  // namespace app\index\controller;
	  // use think\Request;
	  // class Index{

	  //    public function index(Request $request){  //第三种方法，直接在方法中注入
	        
	  //       # 获取浏览器输入框的值
   //              #比如访问 http://localhost/think_web/public/index/index/index/type/5.html?id=10
    
	  //          dump( $request->domain());    //  输入结果：  string(16) "http://localhost"
	  //          dump( $request->pathinfo()); //返回的路径包含 ‘.html’后缀，可以让别人不知道我们是用什么语音开发的  输出结果：  string(24) "index/index/index/5.html"
   //             dump( $request->path());     //返回的路径且不包含 ‘.html’后缀    输入结果： string(19) "index/index/index/5"

   //          # 请求类型
   //             dump( $request->method());  //获取请求类型    输入结果：  string(3) "GET"
   //             dump( $request->isGet());   //判断当前请求是否为 ‘get’ 请求    输出结果：  bool(true)
   //             dump( $request->isPost());   //判断当前请求是否为 ‘post’ 请求    输出结果：  bool(false)
   //             dump( $request->isAjax());   //判断当前请求是否为 ‘ajax’ 请求    输出结果：  bool(false)


   //          # 请求的参数
   //             dump( $request->get()); 
   //             //获取所有get请求参数名以及参数值，但是不会获取 pathinfo 中的参数和参数值，比如获取不到 type=5。  输出结果： array(1) {  ["id"] => string(2) "10"  }

   //             dump( $request->param());
   //             //这个是可以获取所有的请求参数以及请求参数的值。  输出结果：array(2) { ["id"] => string(2) "10" ["type"] => string(1) "5" }
              
   //             dump( $request->post());
   //             //获取所有post请求参数名以及参数值。

               
   //             //设置session
   //             //session('name','arvin');
   //             dump( $request->session());   //获取会话session中的值

               
   //             //cookie('email', '1095654362@qq.com');
   //             dump( $request->cookie());  //获取cookie值。 
   //              // 这里的输出结果为：array(1) {  ["PHPSESSID"] => string(32) "f34ae21a92f6d8d08323f52b8443e195"}
   //              // 因为我们启动了session,所以 在cookie中 默认保存了一个‘PHPSESSID’的值。


   //              //直接获取某个请求参数的值
   //              dump( $request->param('type'));  //这里直接获取请求参数type的值。
   //              dump( $request->cookie('type')); // get,post,param,sessioin,cookie 都可以利用这种方式直接获取某个参数的值

   //          # 获取模块 控制器 操作
   //              dump( $request->module());      //获取当前的模块名称                   输出结果： string(5) "index"
   //              dump( $request->controller());  //获取当前的控制器名称                 输出结果： string(5) "Index"
   //              dump( $request->action());      //获取当前操作action的名称，即方法名    输出结果： string(5) "index"


   //          #返回当前url
   //             dump( $request->url());   //输出结果:string(53) "/think_web/public/index/index/index/type/5.html?id=10"
   //             dump( $request->baseurl()); //输出结果: string(47) "/think_web/public/index/index/index/type/5.html"


	  //    }
	  // }


//================  第4章 input助手函数 ======================================
	   // namespace app\index\controller;
	   // use think\Request;
	   //         //dump($request);
	   // class Index{

    //         public function index(Request $request){

    //                dump( $request->param());


    //         }

	   // }


//================  第4章 响应对象 ======================================

		// namespace app\index\controller;
		// use think\Request;
  //       use think\Config;
		// class Index{

		//       public  function index(Request $request){

  //                 $res = [

  //                      'code'    => 200,
  //                      'result'  => [
  //                               'list' => [1,2,3,4,5,6]
  //                      ]

  //                 ];

  //                 //echo "123";  回应请求时，虽然可以用echo，但一般不建议用echo
  //                 //return "123"; 用return 比 echo  好 , return 就是 response 响应
  //                 //dump($res);

  //                 //Config::set('default_return_type' , 'json');
  //                 Config::set('default_return_type' , 'xml');
  //                 return $res;
                     
		//       }

		// }


//================  第5章 视图view ======================================

  ########第一种返回视图的方法######################
		// namespace app\index\controller;
		// class Index{

  //             public function index(){

  //               #默认模板的地址
  //               #app/index/view/index/index.html

  //               # 传递第一个参数， 修改模板文件目录的
  //               #（upload）: app/index/view/index/upload.html
  //               #（public/upload）: app/index/view/public/upload.html
  //               # 如果以 ./ 开头，那么就会找到我们应用入口文件index.php同级开始的模板文件
  //             	 return view('index', [

  //                  'email' => '1095654362@qq.com',
  //                  'username' => 'arvin'
  //             	 ] ,[

  //                    'STATIC' => '当前是static的替换内容'
  //             	 ]);
  //             }


		// }

   ###########第二种返回视图的方法##################
    // namespace app\index\controller;
    // use think\Controller;
    // class Index extends Controller{    //继承Controller,我们可以使用Controller中很多方法。

    //           public function index(){

                #默认模板的地址
                #app/index/view/index/index.html

                # 传递第一个参数， 修改模板文件目录的
                #（upload）: app/index/view/index/upload.html
                #（public/upload）: app/index/view/public/upload.html
                # 如果以 ./ 开头，那么就会找到我们应用入口文件index.php同级开始的模板文件
                // return view('index', [

                //    'email' => '1095654362@qq.com',
                //    'username' => 'arvin'
                // ] ,[

                //      'STATIC' => '当前是static的替换内容'
                // ]);

                // $this->assign('assign', '这是assign 传递的值');
                // return $this->fetch('index', [

                //    'email' => '1095654362@qq.com',
                //    'username' => 'arvin'
                // ] ,[

                //      'STATIC' => '当前是static的替换内容'
                // ]);

                //return $this->display() 

                 #如果想传递字符串
                 //return $this->display('这是一个字符串');

                 #如果想传递字符串同时传递参数
                // $this->assign('user', 'arvin');
                //  return $this->display('这是{$email}一个字符串', 

                //     'email' => '1095654362@qq.com'
                // );
    //           }


    // }

//================  第5章 视图view ======================================
// 5-2 变量输出、赋值和替换

                      // namespace app\index\controller;
                      // use think\View;
                      // use think\Controller;
                      // class Index extends Controller{

                      //      public function index(){

                      //           //$this->assign('key', 'value');

                      //           //$this->view->key2 = 'value2';

                      //           // View::share( 'key3', 'value3' ) ;

                      //           return $this->fetch('index', [],[

                      //             'STATIC' => '这是static替换后的内容'
                      //           ]
                      //         );
                      //      }
                      // }

//  5-3 系统变量原生标签
                      // namespace app\index\controller;
                      // use think\View;
                      // use think\Controller;
                      // class Index extends Controller{

                      //      public function index(){

                      //           //dump($_SERVER);
                      //           //session('email', '1095654362@qq.com');
                      //           //cookie('name', 'arvin');
                      //           return $this->fetch();
                      //      }
                      // }  

//   5-4 变量输出 调节器 (14:57)
                      // namespace app\index\controller;
                      // use think\View;
                      // use think\Controller;
                      // class Index extends Controller{

                      //      public function index(){

                      //         $this->assign('email', '1095654362@qq.com');

                      //         $this->assign('time', time());  //时间戳
        
                      //         $this->assign('user', 'arvin');

                      //         $this->assign('a',10);

                      //         $this->assign('b',20);

                      //         $this->assign('c',5);

                      //         $this->assign('name','阿本');

                      //           return $this->fetch();
                      //      }
                      // }  

 //5-5 模板循环标签 (18:02)
                      // namespace app\index\controller;
                      // use think\View;
                      // use think\Controller;
                      // class Index extends Controller{

                      //      public function index(){

                      //           $list = [

                      //               'user1' => [
                      //                 'name' => 'imooc',
                      //                 'email' => 'imooc@qq.com'
                      //               ],

                      //               'user2' => [
                      //                 'name' => '1095654362',
                      //                 'email' => '1095654362@qq.com'
                      //               ],

                      //               'user3' => [
                      //                 'name' => 'arvin',
                      //                 'email' => 'arvin@qq.com'

                      //               ]
                      //           ];

                               
                      //          //
                      //           $this->assign('list', $list);
                      //          // $this->assign('empty','<h1>这里没有数据，并且使用了h1标签<h1>');
                      //           return $this->fetch();
                      //      }
                      // }  

//5-6 比较标签 (10:45)
                    // namespace app\index\controller;
                    //   use think\View;
                    //   use think\Controller;
                    //   class Index extends Controller{

                    //        public function index(){
                               
                    //             $this->assign('a', 10);
                    //             $this->assign('b', 10);
                    //             return $this->fetch();
                    //        }
                    //   } 

// 5-8 模板的布局 包含和继承 (27:46)
                    // namespace app\index\controller;
                    //   use think\View;
                    //   use think\Controller;
                    //   class Index extends Controller{

 
                    //        public function index(){
                                
                    //             $this->assign('title','index');
                    //             return $this->fetch();
                    //        }

                    //        public function page1(){

                    //              $this->assign('title','page1');
                    //             return $this->fetch();
                    //        }
                    //   }   


//2-1 数据库的连接操作
                    // namespace app\index\controller;
                    //   use think\View;
                    //   use think\Controller;
                    //   use think\Db;
                    //   class Index extends Controller{

 
                    //        public function index(){
                                
                             // dump(config('database'));
                             //连接数据库的第1种方法：数据库的配置放在应用配置conf/database.php中
                             //$res = Db::connect();  //进行数据库连接 , 当我们只使用这段代码的时候，其实并没有真正的连接数据库，只有我们进行增删改查的时候，才是真正的连接。
                             //dump($res);


                             //连接数据库的第2种方法： 数据库的配置直接放在connect函数中。
                          //      $res = Db::connect(
                          //      [
                          //          // 数据库类型
                          //       'type'            => 'mysql',
                          //       // 数据库连接DSN配置
                          //       'dsn'             => '',
                          //       // 服务器地址
                          //       'hostname'        => '127.0.0.1', //本机：127.0.0.1
                          //       // 数据库名
                          //       'database'        => 'imooc_course2',
                          //       // 数据库用户名
                          //       'username'        => 'root',
                          //       // 数据库密码
                          //       'password'        => '123456',
                          //       // 数据库连接端口
                          //       'hostport'        => '3306',
                          //       // 数据库连接参数
                          //       'params'          => [],
                          //       // 数据库编码默认采用utf8
                          //       'charset'         => 'utf8',
                          //       // 数据库表前缀
                          //       'prefix'          => '',     //同一个数据库中：数据库表前缀，我们可以通过它来给我们的表添加前缀
                          //       // 数据库调试模式
                          //       'debug'           => false,
                          //       // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
                          //       'deploy'          => 0,
                          //       // 数据库读写是否分离 主从式有效
                          //       'rw_separate'     => false,
                          //       // 读写分离后 主服务器数量
                          //       'master_num'      => 1,
                          //       // 指定从服务器序号
                          //       'slave_no'        => '',
                          //       // 是否严格检查字段是否存在
                          //       'fields_strict'   => true,
                          //       // 数据集返回类型
                          //       'resultset_type'  => 'array',
                          //       // 自动写入时间戳字段
                          //       'auto_timestamp'  => false,
                          //       // 时间字段取出后的默认时间格式
                          //       'datetime_format' => 'Y-m-d H:i:s',
                          //       // 是否需要进行SQL性能分析
                          //       'sql_explain'     => false,
                          //       // Builder类
                          //       'builder'         => '',
                          //       // Query类
                          //       'query'           => '\\think\\db\\Query',

                          // ]);
                          //      dump($res);

                            //连接数据库的第3种方法： connect函数中接受一个字符串。
                           //  $res = Db::connect("db_config01");  //进行数据库连接 , 当我们只使用这段代码的时候，其实并没有真正的连接数据库，只有我们进行增删改查的时候，才是真正的连接。
                            // dump($res);

########## 2-2 数据库查询操作 (18:42)#####################

                          //$res = Db::connect();  //进行数据库连接 , 当我们只使用这段代码的时候，其实并没有真正的连接数据库，只有我们进行增删改查的时候，才是真正的连接。
                          #使用sql语句的方式查询数据库:使用query查询数据库
                           //$res = Db::query("select * from imooc_user where id = ? ", [2]);
                           // $res = Db::query("select * from imooc_user");

                           #使用 execute 执行sql语句
                            // $res = Db::execute("insert into imooc_user set username=?, password=?,email=?",[
                            //    'imooc',
                            //    md5('imooc'),
                            //    'imooc@qq.com'
                            // ]);

                            #select 返回所有记录，返回的结果是一个二维数组， 
                            //$res = Db::table('imooc_user')->select();
                            // $res = Db::table('imooc_user')->where([
                            //  'id'=> '100'
                            // ])->select();

                            #使用find（）方法时，会默认返回一条记录，而不会返回整张表的记录。
                            # 返回的结果是一个一维数组,如果结果不存在，返回 NULL
                            //$res = Db::table('imooc_user')->find();
                            //$res = Db::table('imooc_user')->where(['id'=>'1'])->find();

                            #value 返回一条记录，而不会返回整张表的记录,并且是字段记录的某个字段值
                            #如果结果不存在， 返回null
                            //$res = Db::table('imooc_user')->value('username');
                            //$res = Db::table('imooc_user')->where(['id' => '100'])->value('username');

                            #column 返回一个一维数组，即返回整张表某个字段的一整列记录字段值,数组中的value值就是我们要获取的列的值
                            #如果结果不存在， 返回null
                            #如果存在第二个参数，就返回这个数组并且用第二个参数的值作为数组的key值
                            #如果存在第二个参数，且结果不存在，则返回一个空数组
                            //$res = Db::table('imooc_user')->column('username');
                            //$res = Db::table('imooc_user')->column('email','username');
                            //  $res = Db::table('imooc_user')->where(['id' => '10'])->column('email','username');

                            #使用Db::name, 我们就不用写数据路表前缀‘imooc_user’,直接写‘user’即可，在我们的实际开发过程中一般会设置表前缀，所以我们一般会使用 Db::name() 多于 使用 Db::table（）。
                            //$res = Db::name('user')->select();

                            //另外在thinkphp中，它还为我们提供了一个初始函数
                            //Db::table() 每次使用的时候不是去实例化， 而db()每次使用的时候都需要去实例化。
                            //如果我们不想让 db()重新实例化的时候，我们需要给db()传递第三个参数
                             // $res = db('user')->select();
                              //$res = db('user',[],false)-find(); //给db()传递第三个参数，使其不用重新实例化
                              //dump($res);


##############2-3 添加数据 (08:54)###############################

                             //$db = Db::name('user');  //这样写，就不用每次都写Db::name('user')

                             #insert
                             // $res = $db->insert([
                             //    'email' => 'imooc_02@qq.com',
                             //    'password' => md5('imooc_02'),
                             //    'username' => 'imooc_02'
                             // ]);

                             #insertGetId   这个方法的优点是 它最后返回值 是 自增id 的值
                             // $res = $db->insertGetId([
                             //    'email' => 'imooc_02@qq.com',
                             //    'password' => md5('imooc_02'),
                             //    'username' => 'imooc_02'
                             // ]);

                             // $data = [];

                             // for($i=0; $i<10; $i++){
                             //    $data[] = [
                             //    'email' => "imooc__03_{$i}@qq.com",
                             //    'password' => md5("imooc_03_{$i}"),
                             //    'username' => "imooc_03_{$i}"
                             //   ];
                             // }

                             // $res = db::insertAll($data);
                             // dump($res);

##############2-4 数据库更新操作 (10:29)###############################

                             // $db = Db::name('user');  //这样写，就不用每次都写Db::name('user')
   //                          $data = [];  //首先先将之前表数据都清除，并且新增30条新数据
                             // for($i=0; $i<30; $i++){
                             //    $data[] = [
                             //    'email' => "imooc__03_{$i}@qq.com",
                             //    'password' => md5("imooc_03_{$i}"),
                             //    'username' => "imooc_03_{$i}"
                             //   ];
                             // }

                             #update :返回影响的行数
                             #注意： 在使用update时，我们必须使用 where（）添加 更新条件，不然会报错，
                             # 如果我们在更新所有数据，我们可以 传一个恒等条件 '1=1'
                             // $db = Db::name('user');  //这样写，就不用每次都写Db::name('user')
                             // $res = $db -> where([
                             //    'id' => 2
                             // ])->update([

                             //   "username" => 'aben',
                             //   'email' => 'aben@qq.com'
                             // ]);

                             #setField: 返回影响数据的行数,每次只更新一个字段
                             // $res = $db -> where([
                             //    'id' => 3
                             // ])->setField([

                             //   "username" => 'aben',
                             // ]);

                             #setInc: 
                             // $res = $db -> where([
                             //    'id' => 1
                             // ])->setInc('num',5);                            
                             //  dump($res);

                             #setDec: 
                             // $res = $db -> where([
                             //    'id' => 1
                             // ])->setDec('num');                            
                             //  dump($res); 


############## 2-5 数据库删除操作 (03:49)###############################

                              //$db = Db::name('user');  //这样写，就不用每次都写Db::name('user')

                              #delete  : 返回值为被影响数据的行数
                              // $res = $db->where([

                              //     'id' => 1
                              // ])->delete();


                              //如果我们想删除主键的数据，我们可以省略where（），如下删除 主键id 为2 的数据

                              //$res = $db->delete(2);

                              //若我们直接写"$res = $db->delete()",是会报错的，在我们的程序中，我们一般不会删除所有数据的
                              //若我们想要删除所有数据，可以写恒等条件 "1=1",如下：
                              //$res = $db->where('1=1')->delete();
                              //dump($res);

##############  2-6 条件构造器 (12:06) ###############################


                          // $db = Db::name('user');  //这样写，就不用每次都写Db::name('user')

                           # buildSql(): 返回 sql语句

                       //筛选条件： id=1 的情况
                       //where(['id=>1'])等同于where('id',1)等同于where('id=1');

                       //$sql = $db->where(['id'=>1])-> buildSql();  //返回：string '( SELECT * FROM `imooc_user` WHERE  `id` = 1 )'

                       //$sql = $db->where("id=1")-> buildSql();  //返回:string '( SELECT * FROM `imooc_user` WHERE  (  id=1 ) )'

                       //$sql = $db->where("id",1)-> buildSql();  //返回:string '( SELECT * FROM `imooc_user` WHERE  `id` = 1 )'

                       //筛选条件： id 不等于 1 的情况
                       //where("id","<>",1)等同于where("id","NEQ",1)
                       //$sql = $db->where("id","<>",1)-> buildSql(); //返回: string '( SELECT * FROM `imooc_user` WHERE  `id` <> 1 )'
                       //$sql = $db->where("id","NEQ",1)-> buildSql(); //返回: string '( SELECT * FROM `imooc_user` WHERE  `id` <> 1 )'


                       //筛选条件： id 大于等于 1 的情况
                       //where("id","EGT",1)等同于where("id",">=",1)
                       //$sql = $db->where("id","EGT",1)-> buildSql(); //string '( SELECT * FROM `imooc_user` WHERE  `id` >= 1 )'


                       //(NOT)BETWEEN， 当使用BETWEEN时，第三个参数需要是一个字符串
                       //$sql = $db->where("id","BETWEEN","1,5")-> buildSql();// string '( SELECT * FROM `imooc_user` WHERE  `id` BETWEEN 1 AND 5 )' 1 )'

                       //$sql = $db->where("id","NOTBETWEEN","1,5")-> buildSql();// '( SELECT * FROM `imooc_user` WHERE  `id` NOT BETWEEN 1 AND 5 )'

                       //注意： 这里当我们在第三个参数中多写一个20时，系统是会自动忽略这个20的
                       //$sql = $db->where("id","NOTBETWEEN","1,5,20")-> buildSql(); // '( SELECT * FROM `imooc_user` WHERE  `id` NOT BETWEEN 1 AND 5 )'


                       //IN
                       //where("id","IN","1,5,20")等同于where("id","IN",[1,5,20])
                       //$sql = $db->where("id","IN","1,5,20")-> buildSql(); // string '( SELECT * FROM `imooc_user` WHERE  `id` IN (1,5,20) )'


                     //where中另一种表达方法：使用数组
                     //筛选条件： id 大于等于 1 的情况
                     //string '( SELECT * FROM `imooc_user` WHERE  `id` >= 1 )
                     // $sql = $db->where([
                          
                     //"id" => ["EGT",1]

                     // ])-> buildSql();


                     //筛选条件： id in (1,2,3,4,5)
                     //string '( SELECT * FROM `imooc_user` WHERE  `id` IN (1,2,3,4,5) )'
                     // $sql = $db->where([
                            
                     //     "id" => ["IN",[1,2,3,4,5]]

                     // ])-> buildSql();


                     //筛选条件： id in (1,2,3,4,5)  and username = "arvin"
                     //string '( SELECT * FROM `imooc_user` WHERE  `id` IN (1,2,3,4,5)  AND `username` = 'arvin' )'
                     // $sql = $db->where([
                          
                     //     "id" => ["IN",[1,2,3,4,5]],
                     //     "username" => "arvin"

                     // ])-> buildSql();


                     // EXP ： 表达式查询,支持SQL语法     EXP，它不是重新构建sql语句，而是类似于拼接的作用，在代码编译的时候把前后拼接起来
                       //$sql = $db->where("id","EXP","not in (1,2,3)")-> buildSql();//输出的sql语句： string '( SELECT * FROM `imooc_user` WHERE  ( `id` not in (1,2,3) ) )' 

                         //$sql = $db->where("id","in","1,2,3")-> buildSql(); //输出的sql语句：string '( SELECT * FROM `imooc_user` WHERE  `id` IN (1,2,3) )'

                     //添加多个条件连续使用where: AND 条件

                           // $sql = $db
                           //          ->where("id","in","1,2,3")
                           //          ->where("username","eq","arvin")
                           //          -> buildSql(); 

                          // string '( SELECT * FROM `imooc_user` WHERE  `id` IN (1,2,3)  AND `username` = 'arvin' )'


                    //添加多个条件，使用whereOr: or 条件
                           // $sql = $db
                           //          ->where("id","in","1,2,3")
                           //          ->whereOr("username","eq","arvin")
                           //          -> buildSql(); 

                          // '( SELECT * FROM `imooc_user` WHERE  `id` IN (1,2,3) OR `username` = 'arvin' )'
   

                    //添加多个条件，使用多个whereOr: or 条件
                           // $sql = $db
                           //          ->where("id","in","1,2,3")
                           //          ->whereOr("username","eq","arvin")
                           //          ->whereOr("num","lt","10")
                           //          -> buildSql(); 
                                    
                          // '( SELECT * FROM `imooc_user` WHERE  `id` IN (1,2,3) OR `username` = 'arvin'  OR `num` < 10 )' 

                    //添加多个条件，同时使用多个whereOr和where: and 条件 和 or 条件
                           // $sql = $db
                           //          ->where("id","in","1,2,3")
                           //          ->whereOr("username","eq","arvin")
                           //          ->whereOr("num","lt","10")
                           //          ->where("email","eq","109@qq.com")
                           //          -> buildSql(); 
                                    
                          // string '( SELECT * FROM `imooc_user` WHERE  `id` IN (1,2,3)  AND `email` = '109@qq.com' OR `username` = 'arvin'  OR `num` < 10 )' 



##############  2-7 链式操作 (10:40) ###############################


                          //$db = Db::name('user');  //这样写，就不用每次都写Db::name('user')

                           // $data = [];
                           // for($i=1; $i<21; $i++){

                           //     $data[]  = [
                           //          "username" => "imooc_arivn_{$i}",
                           //          "email" => "imooc_arivn_{$i}@qq.com",
                           //          "password" => md5("imooc_{$i}"),
                           //          "num" => $i+100
                           //     ];
                           // }
 
                           // $res =  $db-> insertAll($data);
                           # buildSql(): 返回 sql语句

                          #演示
                          // $res = Db::table("imooc_user")
                              // ->where("id",">","10")  //添加筛选条件
                               //->field("username,id,group")  //只查看"username" 和 "id" 字段
                              // ->order("id DESC")      // 根据某个字段进行排序，这里表根据id字段进行降序，默认升序
                              // ->limit(3)            // '3' 表示返回前3条记录
                              // ->limit(3,5)            // (3,5) 表示从第三条吉记录开始取数据，取5条数据
                              // ->page(2,5)             // 分页取数据， page(x) 相当于 limit((x-1)*5,5) 。 (2,5)表示取第二页的前5条数据
                              // ->group("`group`")      // group表示分组，注意：但我们的字段名为'group'这种关键字时，我们需要添加``符号，将其转为字符串，不然会报错。这个表示按照‘group’字段来进行分组，并且返回每组的第一个记录。
                              // ->select();             // 返回筛选条件后的数据库表数据

                          // dump($res);


                      //      }
                      // } 


############## Thinkphp 5.0 的模型  3-1 什么是模型 (09:16)###############################


            // namespace app\index\controller;

            // use think\Controller;
            // //use app\index\model\User;
            // use think\Loader;
            // class Index{

            //       public  function index(){
         
                       #使用model模型获取数据的方法：

                         #①、使用静态方法
                      // $res = User::get(1);  //这里 静态方法 get(1)表示返回 User模型对应的数据库表imooc_user 的id字段为1数据
                                               //User的get（）是从model类继承下来的

                         #②、实例化对象,使用对象的get()方法
                       //   $user = new User;
                       //   $res = $user::get(3);  表示返回 User模型对应的数据库表imooc_user 的id字段为3数据

                         #③、我们可以先注释掉“use app\index\model\User;”，添加“use think\Loader;”
                            //然后通过loader方法来获取我们的model
                            //如果我们在同一个模块中使用多个模型，就可以使用这种方法，就不用每次都需要添加类似“use app\index\model\User;”的语句
                            //$user = Loader::model("User");
                            //$res = $user::get(4);  // 表示返回 User模型对应的数据库表imooc_user 的id字段为4数据

                         #④、使用model的初始函数  
                            //优点:这个方法不需要我们引入任何的类。即我们可以删除掉 “use app\index\model\User;” 和 “use think\Loader;” 代码
                            //$user = model("User");
                            //$res = $user::get(6);  //表示返回 User模型对应的数据库表imooc_user 的id字段为6数据

                       //建议一般使用前两种方式，最好使用前两种方式，因为初始函数是可能会被我们覆盖掉的（虽然很少发生）
                            //为了代码可读性更高，建议使用第一种方式：引入相关类，再使用其静态方法。 这样代码看起来会更清晰，后期维护方便。

                       //$res = $res->toArray();
                       //dump($res);
                             
                 // }

            //}



############## Thinkphp 5.0 的模型  3-2 使用模型查询数据 (11:38) ###############################


            // namespace app\index\controller;

            // use think\Controller;
            // use app\index\model\User;
            // class Index{

            //       public  function index(){   

                    #查询的几种方法：

                      #（1）、get()函数中传递所要查询的表的主键id值为1的记录。
                      //$res = User::get(1);
                      //dumo($res->username); //获取筛选后某个字段的数据
                      //dump($res); 

                      
                      #（2）、get()函数中传递函数 :  获取 字段‘username’的值是 ‘imooc_arvin_4’ 的记录 
                      // $res = User::get(function($query){
                      //     $query->where("username","eq","imooc_arivn_4");
                      // });

                      #（3）、直接使用where()和链式的其他方法，比如 find()、field()  :查询的表的主键id值为1的记录
                       // $res = User::where("id","ELT",10)
                       // ->field("id,username")
                       // ->find();
                                       
                      #（4）、在方法(2)的基础上修改：多加一个field()方法
                      // $res = User::get(function($query){
                      //     $query->where("username","eq","imooc_arivn_4")
                      //     ->field("id, username");
                      // });

                      #(5)、使用all()同时返回多条数据（多个对象）

                         #①传递字符串
                         //$res = User::all("1,2,3");   //返回主键id分别为1，2，3 的数据（也是对象）
                                                      //注意： User::all("1,2,3") 相当于  User::all([1,2,3]) 
                         //  foreach($res as $val){
                         //     dump($val->toArray());
                         // }

                         #②传递函数
                         // $res = User::all(function($query){
                         //  $query->where("id","<","5")
                         //  ->field("id,username");
                         // });   //返回主键id分别为1，2，3 的数据（也是对象）
                                                      //注意： User::all("1,2,3") 相当于  User::all([1,2,3]) 
                         //  foreach($res as $val){
                         //     dump($val->toArray());
                         // }                    

                       #(6)返回多条数据(即多个对象):直接使用where()、select()
                           // $res = User::where("id",">","15")
                           // ->field("id username,email")
                           // ->limit(3)
                           // ->order("id DESC")
                           // ->select();

                           // foreach($res as $val){
                           //     dump($val->toArray());
                           // }

                        #(7）模型model获取某个字段的值用的方法: value()
                           // $res = User::where("id",10)->value("email");
                           //  dump($res);

                        #(8) 获取多个字段或者说某个字段列的数据的方法： column()
                           //$res = User::column("email");  //返回一个数组
                            // $res = User::column("email","username");//第一个参数是设置数组的值，第二个参数是设置数组的下标 
                            // dump($res);

                      //$res = $res->toArray();  //获取筛选的所有数据
                      // dump($res);
            //      }

            // }

############## Thinkphp 5.0 的模型 3-3 使用模型添加数据 (13:52) ###############################

           //添加一条表数据，相当于我们创建一个模型对象，去插入到数据库表中

            // namespace app\index\controller;

            // use think\Controller;
            // use app\index\model\User;
            // class Index{

            //       public  function index(){   

                #1、 model模型的create()静态方法

                     # 演示1
                       #POST
                       //当create()的第二个参数为true时，表示排除掉数据库中不存在的字段。 

                       // $res = User::create([
 
                       //    'username' => 'imooc',
                       //    'password' => md5('(imooc)'),
                       //    'email' => "imooc@qq.com",
                       //    'num' => 100,
                       //    'demo' => 213  //'demo'字段是我们数据库表中不存在的字段，若是这样子直接写去插入，会报错。

                       // ],true);  // 排除掉不存在的字段，我们就需要设置第二个参数为true。


                     # 演示2
                        //当create()的第二个参数为数组时， 数组的值表示是我们要插入数据的字段。
                        //['username','email'] 表示 仅仅只插入这两个字段‘username’ 和 ‘email’的数据

                         // $res = User::create([
   
                         //    'username' => 'imooc',
                         //    'password' => md5('(imooc)'),
                         //    'email' => "imooc@qq.com",
                         //    'num' => 100,
                         //    'demo' => 213  
                         // ],['username','email']);  

                         // dump($res->id);  //只打印获取自增id字段
                         //dump($res);

                #2、 model模型的save()静态方法: 该方法需要我们先实例化模型对象

                     #演示1
                     //先实例化一个model,再使用save()去添加数据
                     // $userModel = new User;
                     // $userModel->username = "1095654362";
                     // $userModel->email = "1095654362@qq.com";
                     // $userModel->password = md5('1095654362');
                     // $userModel->save();


                    #演示2 ：  直接给save()传一个数组参数
                     //先实例化一个model,再使用save()去添加数据
                     // $userModel = new User;
                     // $res = $userModel->save([

                     //      'username' => '10111111',
                     //      'password' => md5('1095654362'),
                     //       'email' => "1095654362@qq.com"
                     // ]);


                    #演示3 ：  如果传递了一个不存在的字段作为参数，可以使用 allowField进行过滤
                       //先实例化一个model,再使用save()去添加数据,
                       //当添加了一个数据库表不存在的字段，可以使用allowField进行过滤
                       // allowField(true) 表示过滤数据库表不存在的字段的参数
                       // allowField(['username','email']);表示 仅仅只插入这两个字段‘username’ 和 ‘email’的数据
                     // $userModel = new User;
                     // $res = $userModel->allowField(['username','email'])
                     //     ->save([
                     //            'username' => '10111111',
                     //            'password' => md5('1095654362'),
                     //             'email' => "1095654362@qq.com",
                     //             'demo' => 1233
                     //       ]);

                     //  dump($res);  //返回的是 被影响的行数值

                #3、 model模型的saveAll()静态方法: 该方法需要我们先实例化模型对象
            //         $userModel = new User;
            //          $res = $userModel
            //              ->saveAll([
            //                     ['email' => "1111111@qq.com"],
            //                      ['email' => "2222222@qq.com"]
            //                ]);

            //          //dumo($res); $res : 返回的是一个数组，保存着两个对象
            //         foreach($res as $val){
            //               dump($val->toArray());  //返回的是 被影响的行数值   
            //         }

            //      }
            // }


            #注意：
                #save() 返回的是被影响的行数， 而使用 create() 和 saveAll() 返回的是model对象或者是 一个保存的对象集的数组，
                
                #所以需要使用foreach进行遍历打印

                #如果需要过滤，可以使用allowField() 或者给create()添加第二个参数





############## Thinkphp 5.0 的模型 3-4 使用模型更新数据 (13:14) ###############################


            // namespace app\index\controller;

            // use think\Controller;
            // use app\index\model\User;
            // class Index{

            //       public  function index(){   

                    #开始演示更新数据前，先把之前表所有的数据都删除掉，并且添加一些新的数据
                    // $data = [];
                    // for($i=1; $i<21; $i++){
                    //     $data[] = [
                    //         'username' =>"imooc_{$i}",
                    //         'email' => "imooc_{$i}@qq.com",
                    //         'password' => md5("imooc_{$i}"),
                    //         'num' => $i+100
                    //     ];
                    // }
                    // $userModel = new User();
                    // $res = $userModel->saveAll($data);
                    
                    // foreach($res as $val){
                    //    dump($val->toArray());
                    // }

                    //注意： 以上代码执行完一次后将其注释掉，避免重复插入数据


                    #1、model模型中 update()方法

                     #演示1： 更新一个简单或者不需要验证数据的时候

                       //当更新的字段中存在主键id时，则不需要编写where()
                       // $res = User::update([
                       //    'id' => 1,
                       //    'username' => '1095654362'
                       // ]);   


                      #演示2： 传递第二个参数，作为where条件

                           // //① 第二个参数为数组时
                           // // 更新id为2 的记录的 username 字段修改成 ‘1095654362’
                           // $res = User::update([
                           //    'username' => '1095654362'
                           // ], ['id'=>2]);   
                           // dump($res);


                           //② 第二个参数为函数时
                           // 更新id为2 的记录的 username 字段修改成 ‘1095654362’
                               // $res = User::update([
                               //    'username' => '1095654362'

                               // ], function($query){

                               //    $query->where("id","LT",5);
                               // });   
                               // dump($res);


                      #演示3： 模型model直接使用where()方法 和 updata方法

                           // $res = User::where("id","<","6")
                           // ->update([
                           //     'username' => "1095654362"
                           // ]);

                           // dump($res);   //这里返回的是被影响的行数，建议使用这种方法


                      #演示4： 使用模型model的get()获取一条数据(一个对象)，修改其字段(即属性)后，用save()保存在数据库中

                          // $userModel = User::get(1);
                          // $userModel->username = '123';
                          // $userModel->email = '123@qq.com';
                          // $res = $userModel->save();
                          
                          // dump($res);   //这里返回的是被影响的行数，建议使用这种方法


                      #演示5： 使用 new User() 的方式 ,

                          //这里的save()需要设置第二个参数，不然会变成新增数据操作

                          // #①、save()第二个参数为数组的情况
                                // //这里save()传递第二个['id',5] 进行选取数据库表中 id=5 的 记录进行修改
                                // $userModel = new User();
                                // $res = $userModel->save([
                                //       'username'=> "123445677"
                                // ],['id'=>5]);
                                //dump($res);   //这里返回的是被影响的行数，建议使用这种方法
 
                          // #①、save()第二个参数为函数的情况

                               //  $userModel = new User();
                               //  $res = $userModel->save([
                               //        'username'=> "123445677"
                               //  ],function($query){
                               //      $query->where('id','<',10);

                               //  });
                          
                               // dump($res);   //这里返回的是被影响的行数，建议使用这种方法

                      #演示6： 批量更新数据

                             // $userModel = new User;

                             // $res = $userModel -> saveAll([
                             //   ['id'=>1,'username'=>1],
                             //   ['id'=>2,'username'=>2]
                             // ]);

                             // dump($res);  //返回的是一个保存对象的数组。


                      # 总结： 我们一般使用返回值为”被影响行数“ 的方法， 而不采用返回”保存对象的数组“的方法。
            //      }
            // }


############## Thinkphp 5.0 的模型 3-6 模型聚合操作 (07:56) ###############################


            // namespace app\index\controller;

            // use think\Controller;
            // use app\index\model\User;
            // class Index{

            //       public  function index(){   

                    #开始演示更新数据前，先把之前表所有的数据都删除掉，并且添加一些新的数据
                    // $data = [];
                    // for($i=1; $i<11; $i++){
                    //     $data[] = [
                    //         'username' =>"imooc_{$i}",
                    //         'email' => "imooc_{$i}@qq.com",
                    //         'password' => md5("imooc_{$i}"),
                    //         'num' => $i+100
                    //     ];
                    // }
                    // $userModel = new User();
                    // $res = $userModel->saveAll($data);
                   
                    #1、 count() :返回数据库表的记录数

                          //演示1：返回 user表的总记录数
                            //$res = User::count();
                            // dump($res);

                          //演示2：返回 id>5 的记录数
                             // $res = User::where("id", ">", "5")
                             // ->count();
                             // dump($res);


                     #2、 max() :返回数据库表的某个字段的最大值

                          //演示1：返回 user表的‘num’字段的最大值

                            //$res = User::max('num');
                               // dump($res);

                          //演示2：返回 id<5 的所有记录中的‘num’ 字段的最大值

                             // $res = User::where("id", "<", "5")
                             // ->max('num');
                             // dump($res);


                    #3、 sum() :返回数据库表的某个字段的所有值的总和

                          //演示1：返回 user表的‘num’字段的总和

                            // $res = User::sum('num');
                            //    dump($res);


                          //演示2：返回 id<5 的所有记录中的‘num’ 字段的总和

                             // $res = User::where("id", "<", "5")
                             // ->sum('num');
                             // dump($res);
 

                         //演示3：返回 id<5 的所有记录中的‘num’ 字段的总和（和演示2结果一样，方式不同）

                             // $res = User::where("id", "<", "5")
                             // ->max('num');
                             // $res = User::sum('num');
                             // dump($res);


                    #4、 avg() :返回数据库表的某个字段的所有值的平均值

                          //演示1：返回 user表的‘num’字段的平均值

                            // $res = User::avg('num');
                            //    dump($res);


                          //演示2：返回 id<5 的所有记录中的‘num’ 字段的平均值

                             // $res = User::where("id", "<", "5")
                             // ->avg('num');
                             // dump($res);
 
 
                         //演示3：返回 id<5 的所有记录中的‘num’ 字段的平均值（和演示2结果一样，方式不同）

                             // $res = User::where("id", "<", "5")
                             // ->max('num');
                             // $res = User::avg('num');
                             // dump($res);


                    #5、 min() :返回数据库表的某个字段的最小值

                          //演示1：返回 user表的‘num’字段的最小值

                            // $res = User::min('num');
                            //    dump($res);

                          //演示2：返回 id>5 的所有记录中的‘num’ 字段的最小值

            //                  $res = User::where("id", ">", "5")
            //                  ->min('num');
            //                  dump($res);
            //      }
            // }



############## Thinkphp 5.0 的模型 3-7 模型获取器 (06:21) ###############################


                    // namespace app\index\controller;

                    // use think\Controller;
                    // use app\index\model\User;
                    // class Index{

                    //       public  function index(){  

                    //          # 在数据库表imooc_user表中添加一个 ‘sex’ 字段来进行演示

                    //            $res = User::get(2);

                    //            // dump($res->toArray());   //可利用toArray获取改后数据
                    //             dump($res->getData());   //可利用getData获取原始数据
                    //            //echo $res->sex;

                    //      }
                    // }




############## Thinkphp 5.0 的模型 3-8 模型修改器-+自动完成 (11:51) ###############################


                    // namespace app\index\controller;

                    // use think\Controller;
                    // use app\index\model\User;
                    // class Index{



                    //       public  function index(){  

                    //           // $res = User::create([
                    //           //    'username' => 'imooc',
                    //           //    'sex' => 0,
                    //           //    'email' => 'imooc@qq.com',
                    //           //    'password' => 'imooc',
                    //           //    'num' => 1
                    //           // ]);
                    //           //dump($res);


                    //           //测试自动完成 'time_update' 对应的模型修改器是 setTimeUpdateAttr()‘ ，在数据更新的过程中有效
                    //         $userModel = User::get(15);
                    //         $userModel->sex = 1;
                    //         $res = $userModel->save(); 
                    //         dump($res);
                    //         //执行以上代码时， 数据库表中的time_update字段更新了数据， 说明在有数据更新时，自动完成的模型修改器setTimeUpdateAttr 会启动。

                    //      }
                    // }

############## Thinkphp 5.0 的模型 模型时间戳+软删除 (18:53) ###############################


                    namespace app\index\controller;

                    use think\Controller;
                    use app\index\model\User;
                    class Index{

                          public  function index(){  

                            #创建新的数据库表有，因为之前测试的那个数据库表的字段太多，不方便我们测试。
                            #如果我们要记录数据的创建时间和更新时间，我们需要创建两个字段 ’create_time‘ 和 ’update_time‘

                              // $res = User::create([
                              //    'name' => 'imooc',
                              //    'password' => md5('imooc')
                              // ]);
                              // dump($res);

                               // $userModel = User::get(1);
                               // $userModel->name = "imooc_arvin";
                               // $res = $userModel->save();
                               // dump($res);

                              //当我们执行以上代码对数据库进行插入数据时，系统会自动为数据库表的两个字段 ’create_time‘ 和 ’update_time‘进行数据插入或者更新。


                              // $res = User::destroy(1);  //传递一个主键值就可以对数据进行删除。 返回值是int(1);
                               
                              // $res = User::get(1);
                                // dump($res);
                              #如果我们想使用软删除，我们需要给数据库表新增一个字段：delete_time, 注意这个字段是允许为null的，但delete为null时，表示这条数据没有被删除。

                              #这里对数据进行删除时，当我们去数据库进行查询时，这个数据依然还是存在的，但是 delete_time 字段多了一个时间戳的数据。
                              #并且当我们再用get(1), 去获取该记录时，返回值是 null

                              #虽然我们数据库中有这条数据，但是我们使用get（）find（）是获取不到的。
                              #如果我们需要获取到已经软删除的数据时：使用以下方法

                                 // $res =  User::withTrashed(true)->find(1);

                                 // dump($res->getData()); //getData() 获取原始数据

                                #另一种情况： 我们被删除的数据都在垃圾箱中，我们现在只想在垃圾箱中获取所有被删除的数据
                                
                                  // $res = User::onlyTrashed()->select();  //返回多条记录，使用select();
                                  // foreach($res as $val){
                                  //     dump($val->getData());
                                  // }


                                #当我们使用了SoftDelete，我们就无法对数据进行真正的操作，如果我们想对数据进行真正的删除时，可以给destroy()传递第二参数为true。
                                    // $res = User::destroy(1,true);
                                    // dump($res);

                                  $user = User::get(4);
                                  $res = $user->delete(true);
                                   dump($res);
                                    //执行以上代码，数据就会被真正地删除，不会保留在数据库中。
                         }
                    }



?>