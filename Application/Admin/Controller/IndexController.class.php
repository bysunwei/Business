<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function _initialize(){
        if(session("username")=="")
        {
            $this->redirect("Login/index");
        }
    }
    public function index(){
        $this->display();
    }
}