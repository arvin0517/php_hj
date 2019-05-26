<?php
namespace app\admin\controller;
use app\index\model\Article;
use think\Request;
use think\Config;
class Action{
	
	public function ad_upload(){		
	}
	
	//根据博文id 获取一条博文记录
	public function getOneBW(Request $request){
		$article_id = $request->param('article_id');
		$edit_bw = Article::get($article_id);
		if($edit_bw){
			Config::set('default_return_type' , 'json');  //动态设置返回数据的类型为 json格式。
		    return $edit_bw;
		}
		else{
			return null;
		}
	}
	
	//删除博文  deleteBowen
	public function deleteBowen(Request $request){
		$article_id = $request->param('article_id');
		$del_bw = Article::get($article_id);
		$res = $del_bw->delete();
		if($res){
			return true;
		}else{
			return false;
		}
			
	}
	
	
	//查询当前页的博文列表或者搜索条件后的博文列表   前端请求的数据： page=1&limit=10
	public function queryAllBowen(Request $request){	
		
		$bw_page = $request->get("page");    //当前页
		$bw_limit = $request->get("limit");  //每页的记录数
		$sea_way = $request->get("sea_way"); //判断搜索的方式： 1表示为条件搜索
 		$res_count = 0;
 		if(!$sea_way){
 			$query_res = Article::field("article_id, article_title, article_type1, article_type2, article_status, article_create_time, article_public_time, article_click")
		                     ->page($bw_page,$bw_limit)
		                     ->select();
		                     
		    $res_count = Article::count();
 		}else{
 			$sea_bw_type = $request->get("sea_bw_type");
 			$search_bw_title = $request->get("search_bw_title");
 			$search_bw_starttime = $request->get("search_bw_starttime");
 			$search_bw_endtime = $request->get("search_bw_endtime");
 			$where = [];
 			if($sea_bw_type){
 				$where['article_type2'] = array('eq' , $sea_bw_type);
 			}
 			if($search_bw_title){
 				$where['article_title'] = array('like' , "%$search_bw_title%");
 			}
 			if($search_bw_starttime){
 				$where['article_create_time'] = array('between' , "$search_bw_starttime,$search_bw_endtime");
 			}
 			$query_res = Article::field("article_id, article_title, article_type1, article_type2, article_status, article_create_time, article_public_time, article_click")
 			                 ->where($where)
		                     ->page($bw_page,$bw_limit)
		                     ->select();
		                     //->buildSql();
		                     //dump($query_res);
		                     //return;
		                     
		    // 这里的$res_count，是为了获取 条件查询后总记录数           
		    $res_count = Article::field("article_id, article_title, article_type1, article_type2, article_status, article_create_time, article_public_time, article_click")
 			                 ->where($where)
		                     ->count();             
 		}
 		
		
		                     
		                     
		$bw_res = [];
		foreach($query_res as $val){
			$bw_res[] = $val->toArray(); 
		}
		$bw_data = array("code" => 0,"msg" => "","count" => $res_count, "data" => $bw_res );  //保存前端需要的数据格式
		//dump($bw_data);
		Config::set('default_return_type' , 'json');  //动态设置返回数据的类型为 json格式。
		return $bw_data;		
	}
	
	//保存或者更改博文
	public function saveBowen(Request $request){
		
		 //var $add_article_status = $request->param('add_article_status');
		 $bw_status = $request->param('add_article_status'); 	 
		 $temp_id = $request->param('add_article_id');		 
		 //这里判断是新增还是更改，$temp_id为null,则是新增，$temp_id有值，则是更改
		 if($temp_id){   
		 	$bowenModel = Article::get($temp_id);
		 }
		 else{
		 	$bowenModel = new Article();
		 }
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
		 
		 if($res&&$temp_id){
		 	return $temp_id;
		 }
		 else if($res){
		    $temp_id = $bowenModel::max("article_id");
		    return $temp_id;
		 }
		 else{
		 	return $res;
		 }		 
        	 //dump($res);        
	}
}

?>