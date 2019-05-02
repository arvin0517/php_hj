<?php

   namespace app\admin\controller;

   use app\common\controller\Index as commonIndex;
   class Index{

   	   // public function index(){

   	   // 	  return  "this admin index index";
   	   // }

   	   // public function common(){

   	   // 	  $common = new commonIndex();
   	   // 	  return "admin_common: ".$common->index();
   	   // }

           public function index(){
 
                 dump(config());

           }

           public function demo(){

                return 'admin index demo';
           }
   }



?>