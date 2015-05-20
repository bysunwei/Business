<?php
namespace Home\Widget;
use Think\Controller;
class TemplateWidget extends Controller {
    public function top(){
        $this->navlist=M("nav")->where("isshow='%s'",1)->select();
        $this->display("Template:top");
    }
}