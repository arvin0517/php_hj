<?php

namespace app\admin\controller;
//use think\View;
use think\Controller;
class Index extends Controller{
	
	public function index(){
		
		return $this->fetch();
		
	}	
	public function testImg(){
		//return $this->fetch();
		return view();
	}
	public function test_tab(){
		return $this->fetch();
	}
	public function test_form(){
		return $this->fetch();
	}
	public function add_bw(){
		return $this->fetch();
	}
}

?>