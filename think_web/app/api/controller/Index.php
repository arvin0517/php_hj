<?php
	  
	 //responses的用处就是： 我们可以app目录下，新建api\controller\Index.php 作为接口，来返回数据，如以下我们新建一个getUserInfo函数
	 namespace app\api\controller;
     use think\Config;
	 class  Index{

	   public function index(){

	       return 'this is api Index index';

	   }

	   public function getUserInfo($type = 'json'){   // $type 如果为空，则默认设置为json格式

	   	  if(!in_array($type, ['json','xml'])){

	   	  	  $type = 'json';
	   	  }
    
        Config::set('default_return_type', $type);
	       $data = [

	         'code' => 200,
	         'result' => [
	             'username' => 'arvin',
	             'useremail' => '109565463@qq.om'
	         ]
	       ];


	       return $data;  //如果在这里直接返回数组类型的数据是会报错。  
	                      //我们可以在应用配置conf目录下新建api\config.php, 配置  'default_return_type' => 'json' ，使其返回json格式的数据，就不会报错了
	  }

	 }

?>