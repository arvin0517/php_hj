<?php

 namespace app\index\model;

 use think\Model;
 use traits\model\SoftDelete;  
 class User extends Model{

			     # 命名 imooc_user -> User.php User
			 	 #      imooc_user_info -> UserInfo.php UserInfo

################################################################


                     use SoftDelete;   
 
                     protected $deleteTime = "delete_at";//设置自定义的软删除字段

################################################################

                  #直接在单独的模型类里面设置 : 开起单个模型的时间戳 
                      protected $autoWriteTimestamp = true;

                   // 定义时间戳字段名

                      protected $createTime = false; //如果你只需要使用 update_time 字段而不需要自动写入create_time ，则可以单独设置关闭某个字段,使用 "$createTime = 'false'"

                      protected $updateTime = 'update_at';

                      
################################################################

                       #自动完成
                            //如果我们想使用自动完成，首先我们需要声明一个数组$auto、或者数组$insert、或者数组$update等，数组里面的内容就是我们要完成的字段，类似这里’time‘字段、’time_insert‘字段、’time_update‘字段

                           #演示1：
	 	                        //数组$auto 是在数组添加、更新等变化都会完成自动完成的操作，它定义的方法和我们的模型修改器是一样的
	                            //'time' 对应的模型修改器是 ’setTimeAttr()‘, 对应的数据库表的字段为’time‘
	                            // protected $auto = ['time'];

	                             //time对应的模型修改器 setTimeAttr()
	                             // public function setTimeAttr(){
	                             //           return time();   // time()函数 返回的是时间戳。
	                             // }


                            #演示2
	                            //数组$insert  ：$insert 表示只在 数据插入新增的时候有效。
                                // 'time_insert' 对应的模型修改器是 ’setTimeInsertAttr()‘, 对应的数据库表的字段为’time_insert‘
 
	                             // protected $insert = [
	                             //      'time_insert' 
	                             // ];

                              //    //time_insert对应的模型修改器 setTimeInsertAttr
	                             // public function setTimeInsertAttr(){
	                             //           return time();   // time()函数 返回的是时间戳。
	                             // }


	                        #演示3
	                            //数组$update  ：$update 表示只在 数据更新的时候有效,会对数据进行改变。所以在数据插入新增的时候，这个修改器是不会执行的，所以数据库表中的time_update字段依然不会
                                // 'time_update' 对应的模型修改器是 setTimeUpdateAttr()‘, 对应的数据库表的字段为’time_update‘
 
	                             // protected $update = [
	                             //      'time_update' 
	                             // ];

                                 //time_update对应的模型修改器 setTimeUpdateAttr
	                             // public function setTimeUpdateAttr(){
	                             //           return time();   // time()函数 返回的是时间戳。
	                             // }
                      


################################################################


			 	
			 	 //数据获取器
 	             //getSexAttr($val,$data) :表示可以传递第二个参数，$data表示我们获取到的所有数据。
			     // public function getSexAttr($val){

			     //      switch ($val) {
			     //      	case '1':
			     //      		return "男";
			     //      		break;
			          	
			     //        case '2':
			     //      		return "女";
			     //      		break;

			     //      	default:
			     //      		return "未知";
			     //      		break;
			     //      }
			     // }


			     //数据修改器,在进行插入操作的时候，或者在数据进行插入操作的时候，会调用该方法来进行数据的改变再插入到数据库表中。

			         //数据修改器的第一种写法： 只有一个参数
		                 // public function setPasswordAttr($val){
		                 //      return md5($val);
		                 // }

			         //数据修改器的第二种写法：  两个参数

                         //$data 表示我们即将要插入的所有数据。 
		                 // public function setPasswordAttr($val,$data){

                   //             return md5($val . $data['email']);  //表示我们的密码先连接邮箱组成新的字符串，然后再进行加密。
		                 //      //return md5($val);
		                 // }

 }
?>