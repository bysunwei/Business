<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
        if($_POST)
        {
            $where["username"]=I("post.username");
            $where["password"]=md5(I("post.password"));
            if(M("user")->where($where)->find())
            {
                session('username',I("post.username"));
                $this->redirect('Index/index');
            }else{
                $this->errorinfo="密码不正确";
            }

        }
        $this->display();
    }
    public function  loginout(){
        session(null);
        //退出成功清除cookie
        header("location:".__ROOT__."/index.php/Admin");
    }
}