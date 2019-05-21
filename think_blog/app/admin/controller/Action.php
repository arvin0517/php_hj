<?php
namespace app\admin\controller;
use app\index\model\Article;
use think\Request;
class Action{
	
	public function ad_upload(){
		

		
		
	}
	
	public function saveBowen(Request $request){
		
		 //var $add_article_status = $request->param('add_article_status');
		 $bw_status = $request->param('add_article_status'); 
		 $bowenModel = new Article();
		 $bowenModel->article_status = $request->param('add_article_status');    //状态
		 $bowenModel->article_title = $request->param('add_article_title');      //标题
		 $bowenModel->article_content = $request->param('add_article_content');  //内容
		 $bowenModel->article_type1 = $request->param('add_article_type1');      //类型 ：原创、翻译、转载...
		 $bowenModel->article_type2 = $request->param('add_article_type2');      //分类：数据库、后台、前端...
		 $bowenModel->article_tags = $request->param('add_article_tags');        //标签
		 $bowenModel->article_user_id = 1;  // 作者的id
		 if($bw_status == 1){
		 	$bowenModel->article_public_time = time();  // 若是选择发布，则保存 发布时间
		 }
		 $res = $bowenModel->save();
        	 //dump($res);
         return $res;
	}
}

?>