<?php

namespace app\index\model;
use think\Model;
use traits\model\SoftDelete;
class Article extends Model{
	
	//使用软删除
	use SoftDelete;
	
	// 开启自动写入时间戳字段
	 protected $autoWriteTimestamp = true;  
	 
	 // 定义时间戳字段名
	 protected $createTime = "article_create_time";
	 protected $updateTime = "article_update_time";
	
	 //将 博文的保存时间、更新时间、发布时间 的时间戳转为日期输出
	 public function getArticleCreateTimeAttr($val){
	 	return date("Y-m-d ", $val);
	 }
	 public function getArticleUpdateTimeAttr($val){
	 	return date("Y-m-d ", $val);
	 }
	 public function getArticlePublicTimeAttr($val){
	 	return date("Y-m-d ", $val);
	 }
	 
	 
}

?>