<?php

namespace app\index\model;
use think\Model;
use traits\model\SoftDelete;

class User extends Model{
	
	//使用软删除
	 use SoftDelete;
	 
	 // 开启自动写入时间戳字段
	 protected $autoWriteTimestamp = true;  
	 
	 // 定义时间戳字段名
	 protected $createTime = "user_create_time";
	 protected $updateTime = "user_update_time";
	
	//user_sex
	public function getUserSexAttr($val){
		$str_sex = ["0"=>"未知","1"=>"男","2"=>"女"];
		return $str_sex[$val];
	}
	
	public function setUserSexAttr($val){
		$int_sex = ["未知"=>"0","男"=>"1","女"=>"2"];
		return $int_sex[$val];
	}
	
	//user_password
	public function setUserPasswordAttr($val){
		return md5($val);
	}
}
?>