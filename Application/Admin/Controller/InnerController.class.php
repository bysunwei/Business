<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Upload;
use Org\Util\TableTree;
use Think\Storage\Driver\File;
class InnerController extends CommonController {
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
    public function ad(){
        $this->adlist=M("Ad")->select();
        $this->display();
    }
    public function insertad(){
        $this->display();
    }
    public function addad(){
        $arr = array (
            'navTabId'=>"inner-ad",
            'rel'=>"",
            "callbackType"=>"closeCurrent",
            "forwardUrl"=>"",
            'confirMsg'=>""
        );
        $ad=M("Ad");
        if($_FILES)
        {
            //商品小图片上传
            $config = array(
                'maxSize'    =>    3145728,
                'rootPath'   =>    './test/',
                'saveName'   =>    array('date','YmdHis'),
                'exts'       =>    array('jpg', 'gif', 'png'),
                'autoSub'    =>    true,
                'subName'    =>    'logo',
            );
            $upload = new Upload($config);// 实例化上传类
            //上传文件
            $info   =   $upload->upload();
            if(!$info) {
                // 上传错误提示错误信息
                $this->error($upload->getError());
            }else{
                // 上传成功 获取上传文件信息
                foreach($info as $file)
                {
                    $_POST['ad_img'] =$file['savepath'].$file['savename'];
                }
            }
        }
        if(!$ad->create())
        {
            $this->error($ad->getError());
        }else{

            if($ad->add())
            {
                $arr["statusCode"]=200;
                $arr["message"]="新广告添加成功";
                $this->ajaxReturn($arr);
            }else{
                $arr["statusCode"]=300;
                $arr["message"]="新广告添加失败";
                $this->ajaxReturn($arr);
            }
        }
    }
    public function editad(){
        $m=M("ad");
        $where["id"]=I("get.id");
        $adinfo=$m->where($where)->find();
        $this->assign("adinfo",$adinfo);
        $this->display();
    }
    public function updatead(){
        $arr = array (
            'navTabId'=>"inner-ad",
            'rel'=>"",
            "callbackType"=>"closeCurrent",
            "forwardUrl"=>"",
            'confirMsg'=>""
        );
        $ad=M("Ad");
        if($_FILES['ad_img']['name'])
        {
            //商品小图片上传
            $config = array(
                'maxSize'    =>    3145728,
                'rootPath'   =>    './test/',
                'saveName'   =>    array('date','YmdHis'),
                'exts'       =>    array('jpg', 'gif', 'png'),
                'autoSub'    =>    true,
                'subName'    =>    'logo',
            );
            $upload = new Upload($config);// 实例化上传类
            //上传文件
            $info   =   $upload->upload();
            if(!$info) {
                // 上传错误提示错误信息
                $this->error($upload->getError());
            }else{
                // 上传成功 获取上传文件信息
                foreach($info as $file)
                {
                    $_POST['ad_img'] =$file['savepath'].$file['savename'];
                }
                //删除原广告图片
                $old_img=$ad->where("id=".I("post.id"))->getField("ad_img");
                $old_img_path='.'.__ROOT__.'/test/'.$old_img;
                $file=new File();
                $file.unlink($old_img_path);
            }
        }
        if(!$ad->create())
        {
            $this->error($ad->getError());
        }else{
            if($ad->save())
            {
                $arr["statusCode"]=200;
                $arr["message"]="新广告编辑成功";
                $this->ajaxReturn($arr);
            }else{
                $arr["statusCode"]=300;
                $arr["message"]="新广告编辑失败";
                $this->ajaxReturn($arr);
            }
        }
    }
    public function insertnav(){
        $m=M("nav");
        $navlist=$m->select();
        import('ORG.Util.TableTree');
        $tableTree=new TableTree;
        $tableTree->tree($navlist);
        $this->navlist=$tableTree->getArray();
        $this->display();
    }
    public function addnav(){
        $arr = array (
            'navTabId'=>"inner-nav",
            'rel'=>"",
            "callbackType"=>"closeCurrent",
            "forwardUrl"=>"",
            'confirMsg'=>""
        );
        $nav=M("Nav");
        if(!$nav->create())
        {
            $arr["statusCode"]=200;
            $arr["message"]=$nav->getError();
            $this->ajaxReturn($arr);
        }else{
            if($nav->add())
            {
                $arr["statusCode"]=200;
                $arr["message"]="新导航添加成功";
                $this->ajaxReturn($arr);
            }else{
                $arr["statusCode"]=300;
                $arr["message"]="新导航添加失败";
                $this->ajaxReturn($arr);
            }
        }
    }
}