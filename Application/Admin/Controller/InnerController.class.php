<?php
namespace Admin\Controller;
use Think\Controller;
use Org\Util\TableTree;
class InnerController extends Controller {
    public function nav(){
        $m=M("nav");
        $navlist=$m->select();
        import('ORG.Util.TableTree');
        $tableTree=new TableTree;
        $tableTree->tree($navlist);
        $this->navlist=$tableTree->getArray();
        $this->display();
    }
    public function editnav(){
        $m=M("nav");
        $where["id"]=I("get.id");
        $navinfo=$m->where($where)->find();
        $this->assign("navinfo",$navinfo);
        $this->display();
    }
    public function updatenav(){
        $arr = array (
            'navTabId'=>"inner-nav",
            'rel'=>"",
            "callbackType"=>"closeCurrent",
            "forwardUrl"=>"",
            'confirMsg'=>""
        );
        $m=M("nav");
        $data=$m->create();
        if($m->save($data)){
            $arr["statusCode"]=200;
            $arr["message"]="修改成功";
            $this->ajaxReturn($arr);
        }else{
            $arr["statusCode"]=300;
            $arr["message"]="修改失败";
            $this->ajaxReturn($arr);
        }
    }
}