<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $adwhere["ad_position"]=1;
        $this->adlist=M("Ad")->where($adwhere)->select();
        $this->display();
    }
}