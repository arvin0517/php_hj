<?php
    namespace app\index\controller;
    use think\Request;
    use think\Config;
    use app\index\model\User;
    class Action{
    	
    	public function index(){
    		
    	     //return view();

    		
    	}
    	
    	//用邮箱发验证码
    	public function sendCode(Request $request){  	
                 $req_email = $request->param("useremail");  //从模板获取用户输入的邮箱
                 $sendCode_type = $request->param("sendCode_type"); //sendCode_type : 1 表示是注册验证码 ，2表示是找回密码验证码
                 $checkCode = "";
                 //产生随机6位数的验证码
              	 for($i=0;$i<6;$i++){
              		$temp = mt_rand(0,9);
              		$checkCode = $checkCode.$temp;
              	 }
              	 
                 //Config::set('default_return_type' , 'json');  //动态设置 返回 json 格式数据
                if($sendCode_type == "1"){           	              	
	                 if(sendEmail($checkCode, $req_email,"") ){ //若发送邮件成功，则将验证码保存在cookie中，方便前端模板利用       	                
	                  	 return $checkCode;
	                  }
	                  else{
	                   	  return false;
	                  }               	                	 	
                }
                else if($sendCode_type == "2"){
                	
                	$fp_res = User::where("user_email",$req_email)
                	          ->count();
                	          
                //return三种情况： 0 表示 邮箱未注册 ， 1 表示 发送验证码失败， $checkCode 表示发送验证码成功           
                	if($fp_res > 0){
                		if(sendEmail($checkCode, $req_email,"") ){ //若发送邮件成功，则将验证码保存在cookie中，方便前端模板利用                      
		                  	 return $checkCode;
		                  }
		                  else{
		                   	  return 1;
		                  }   
                	}else{             		
                		return 0;
                	}               	
                }
        }
        
        //创建用户
        public function createUser(Request $request){
        	 $req_email = $request->param("useremail"); 
        	 $req_pw = $request->param("user_reg_pw");
        	 //echo"{$req_email}:{$req_pw}";
        	 
        	 $userModel= new User();
        	 $userModel->user_name = "abcd";
        	 $userModel->user_password = $req_pw;
        	 $userModel->user_phone = "";
        	 $userModel->user_sex = "未知";
        	 $userModel->user_create_ip = "127.0.0.1";
        	 $userModel->user_email = $req_email;
        	 $userModel->user_last_login_ip = "127.0.0.1";
        	 $userModel->user_image_url = "";
        	 $userModel->user_rank = "1";
        	 //$userModel->user_create_time = "" ; 创建时间会自动保存，所以这里不用保存
        	 //$userModel->user_update_time = "";  更新时间会自动保存，所以这里不用保存
        	 $res = $userModel->save();
        	 //dump($res);
        	 return $res;
        }
        
        //判断 邮箱 是否已被注册
        public function isExist(Request $request){
        	//$existModel = new User();
        	$req_email = $request->param("isExist_email"); 
      	    $res = User::where("user_email",$req_email)
                      ->count();
            //dump($res);
            if($res>0){
            	return true;
            }
            else{
            	return false;
            }
        }
        
        
        //登录，判断密码是否正确
        public function denglu(Request $request){
        	
        	 $denglu_info = $request->param("dl_info");
        	 $denglu_pw = md5($request->param("dl_pw"));
        	 $where = [
				 'user_password'     => [ 'eq' , $denglu_pw] ,
				 'user_name|user_phone|user_email' => [ [ 'eq' , $denglu_info],  'or' ] ,
				   ];
			//SELECT * FROM `blog_user` WHERE  `blog_user`.`delete_time` IS NULL  AND `user_password` = '96e79218965eb72c92a549dd5a330112'  AND ( ( `user_name` = 'arvin517@163.com' ) OR ( `user_phone` = 'arvin517@163.com' ) OR ( `user_email` = 'arvin517@163.com' ) )	
			   
		    //$res = User::where($where)->buildSql();    
			//dump($res);
			$res = User::where($where)->find();
			 if($res){			 	
			 	session("userInfo",$res->toArray());
			 	return true;
			 }
			 else{
			     return false;
			 }
        }
        
        //修改用户表
        public function updateUser(Request $request){
        	$user_password = $request->param("user_password");
        	$find_email = $request->param("find_email");
        	$upd_res = User::where("user_email",$find_email)
        	              ->update([
        	              "user_password" => md5($user_password)
        	              ]);
        	return $upd_res;
        	//dump($upd_res);
        }
    }
?>