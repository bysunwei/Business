<?php
namespace Home\Widget;
use Think\Controller;
class TemplateWidget extends Controller {
    public function top(){
        $where["isshow"]='1';
        $where["pid"]=0;
        $this->navlist=M("nav")->where($where)->select();
        $this->dropnav=D("nav")->where($where)->relation(true)->select();

        $this->display("Template:top");
    }
}