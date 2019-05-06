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
                 //Config::set('default_return_type' , 'json');  //动态设置 返回 json 格式数据
                 $checkCode = "";
                 //产生随机6位数的验证码
              	 for($i=0;$i<6;$i++){
              		$temp = mt_rand(0,9);
              		$checkCode = $checkCode.$temp;
              	 }
              	
                 if(sendEmail($checkCode, $req_email,"") ){ //若发送邮件成功，则将验证码保存在cookie中，方便前端模板利用       
                 	    	             
                  	 return $checkCode;
                  }
                  else{
                   	  return false;
                  }
                  //dump($res);
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
    }
?>