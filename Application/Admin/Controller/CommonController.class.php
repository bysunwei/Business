<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Page;

class CommonController extends Controller{

	public function _initialize(){
        if(session("username")=="")
        {
            $arr = array (
                'navTabId'=>"",
                'rel'=>"",
                "callbackType"=>"",
                "forwardUrl"=>"",
                'confirMsg'=>""
            );
            $arr["statusCode"]=301;
            $arr["message"]="登陆超时，请重新等陆";
            $this->ajaxReturn($arr);
        }
	}

}
?>