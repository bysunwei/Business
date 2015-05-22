<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $adwhere["ad_position"]=1;
        $this->adlist=M("Ad")->where($adwhere)->select();
        $adwhere1["ad_position"]=2;
        $this->adlist1=M("Ad")->where($adwhere1)->select();
        $adwhere2["ad_position"]=3;
        $adlist2=M("Ad")->where($adwhere2)->select();
        foreach($adlist2 as $k=>$value){
            $a=$k/5;
            $b=$k%5;
            $newad[$a][$b]=$value;
        }
        $this->assign('newad',$newad);
        $this->display();
    }
}