<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="/Public/my/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="/Public/my/css/normalize.css" type="text/css">
    <link rel="stylesheet" href="/Public/my/css/component.css" type="text/css">
    <link rel="stylesheet" href="/Public/my/css/home.css" type="text/css">

    <script src="/Public/my/js/jquery-1.7.2.min.js"></script>
    <script src="/Public/my/js/bootstrap.js"></script>
    <script src="/Public/my/js/my.js"></script>
    <script>

    </script>
    <style>

    </style>
</head>



<body>
<?php echo W('Template/top');?>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <?php if(is_array($adlist)): $k = 0; $__LIST__ = $adlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voad): $mod = ($k % 2 );++$k;?><div <?php if($k == 1): ?>class="item active"<?php else: ?> class="item"<?php endif; ?> style="width: 1920px; height:400px">
            <img src="/test/<?php echo ($voad['ad_img']); ?>" alt="..." style="width: 100%">
            <div class="carousel-caption">

            </div>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div><!--幻灯片-->
<!--产品介绍-->
<div class="marketing">
    <div class="container">
        <?php if(is_array($adlist1)): $i = 0; $__LIST__ = $adlist1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voad1): $mod = ($i % 2 );++$i;?><div class="col-lg-2 col-lg-offset-1" style="border: none; padding-bottom: 20px">
                <a href="<?php echo ($voad1["ad_link"]); ?>" style="display: block"><img class="img-rounded" src="/test/<?php echo ($voad1["ad_img"]); ?>" alt="<?php echo ($voad1["name"]); ?>" ></a>
                <p><a href="<?php echo ($voad1["ad_link"]); ?>" target="_blank"><?php echo ($voad1["name"]); ?></a></p>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>

            <!--<div class="col-lg-2 ">
                <a href="2.html" target="_blank"><img class="img-rounded" src="/img/2.png" alt="自动发货系统"></a>
                <p><a href="2.html" target="_blank">自动化系统</a></p>
            </div>
            <div class="col-lg-2 ">
                <a href="3.html" target="_blank"><img class="img-rounded" src="/img/3.png" alt="自动发货系统" ></a>
                <p><a href="3.html" target="_blank">设备维修自动化系统</a></p>
            </div>
            <div class="col-lg-2 ">
                <a href="###"><img class="img-rounded" src="/img/4.png" alt="自动发货系统"></a>
                <p><a href="###">订单管理自动化系统</a></p>
            </div>
            <div class="col-lg-2 ">
                <a href="###"><img class="img-rounded" src="/img/5.png" alt="自动发货系统" ></a>
                <p><a href="###">成本管理自动化系统</a></p>
            </div>

            <div class="col-lg-2 col-lg-offset-1" style="border: none">
                <a href="###"><img class="img-rounded" src="/img/6.png" alt="自动发货系统" ></a>
                <p><a href="###">MES系统</a></p>
            </div>
            <div class="col-lg-2 ">
                <a href="###"><img class="img-rounded" src="/img/7.png" alt="自动发货系统" ></a>
                <p><a href="###">自动化系统</a></p>
            </div>
            <div class="col-lg-2 ">
                <a href="###"><img class="img-rounded" src="/img/8.png" alt="自动发货系统" ></a>
                <p><a href="###">设备维修自动化系统</a></p>
            </div>
            <div class="col-lg-2 ">
                <a href="###"><img class="img-rounded" src="/img/9.png" alt="自动发货系统"></a>
                <p><a href="###">订单管理自动化系统</a></p>
            </div>
            <div class="col-lg-2 ">
                <a href="###"><img class="img-rounded" src="/img/7.png" alt="自动发货系统" ></a>
                <p><a>成本管理自动化系统</a></p>
            </div>
-->
    </div>
</div>
<div class="container Example grid">
    <div class="row">
        <div class="col-lg-3 col-lg-offset-2">
            <figure class="effect-oscar">
                <img src="/img/e3.jpg" alt="img08"/>
                <figcaption>
                    <h2><span>CT-MES制造业生产执行系统</span></h2>
                    <p>行业特点： 国内众多医药企业在迅速扩大经营规模，企业药品质量管理，面临着更多的难题，原有手工管理模式的局限性日益突出，并且越来越成为企业进一步发展的瓶......</p>
                    <a href="http:///" target="_blank">View more</a>
                </figcaption>
            </figure>
        </div>
        <div class="col-lg-3">
            <figure class="effect-oscar">
                <img src="/img/e1.jpg" alt="img08"/>
                <figcaption>
                    <h2> <span>Ct-EMC制造业能源管理系统</span></h2>
                    <p>化工行业产品质量追溯 化工行业分为基础化工和精细化工两大类，基础化工生产基本化工原料，而精细化工生产的产品,多为各工业部门广泛应用的辅助材料或人民生......</p>
                    <a href="http://ww.com/" target="_blank">View more</a>
                </figcaption>
            </figure>
        </div>
        <div class="col-lg-3">
            <figure class="effect-oscar">
                <img src="/img/e2.jpg" alt="img08"/>
                <figcaption>
                    <h2><span>CT-VR制造业虚拟仿真系统</span></h2>
                    <p>行业特点： 酒类产品尤其是国内外名优品牌长期遭受着严重的假冒侵害； 酒类产品市场范围广，分销渠道形式多样，结构复杂，跨区域销售、囤货等现象对企业市场发展......</p>
                    <a href="http:///" target="_blank">View more</a>
                </figcaption>
            </figure>
        </div>
    </div>
</div>
<div class="container Client">
    <div class="row">
        <div class="col-lg-3 col-lg-offset-1" >
            <h1>Client<span>客户</span></h1>
        </div>
        <div class="col-lg-11 col-lg-offset-1">
            <div id="carousel-example-generic1" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <?php if(is_array($newad)): $newk = 0; $__LIST__ = $newad;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voad2): $mod = ($newk % 2 );++$newk;?><div <?php if($newk == 1): ?>class="item active"<?php else: ?>class="item"<?php endif; ?>  >
                        <?php if(is_array($voad2)): $i = 0; $__LIST__ = $voad2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voad2_1): $mod = ($i % 2 );++$i;?><img src="/test/<?php echo ($voad2_1["ad_img"]); ?>" alt="..." class="col-lg-2" ><?php endforeach; endif; else: echo "" ;endif; ?>
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
                  <!--  <div class="item" >
                        <img src="/img/hcase_logo11.jpg" alt="..." class="col-lg-2" >
                        <img src="/img/hcase_logo13.jpg" alt="..." class="col-lg-2">
                        <img src="/img/hcase_logo4.jpg" alt="..." class="col-lg-2">
                        <img src="/img/hcase_logo8.jpg" alt="..." class="col-lg-2">
                        <img src="/img/hcase_logo9.jpg" alt="..." class="col-lg-2">
                    </div>
                    <div class="item">
                        <img src="/img/hcase_logo2.jpg" alt="..." class="col-lg-2" >
                        <img src="/img/hcase_logo3.jpg" alt="..." class="col-lg-2">
                        <img src="/img/hcase_logo4.jpg" alt="..." class="col-lg-2">
                        <img src="/img/hcase_logo8.jpg" alt="..." class="col-lg-2">
                        <img src="/img/hcase_logo9.jpg" alt="..." class="col-lg-2">
                    </div>-->
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container Dynamic">
    <div class="row">
        <div class="col-lg-7 col-lg-offset-1" style="padding: 10px">
            <h3>关于我们</h3>
            <h4>北京畅哲科技有限公司--自动化解决方案供应商</h4>
            <p style="text-indent:2em ">北京畅哲科技有限公司（CHARGERS），是由多名具有丰富经验的软件工程师组建的公司
                面对中国智造的大趋势，公司以为制造业提供精细化节能提效管理系统业务为核心。致力于通过先进的MES系统、能源EMC管理系统和VR制造仿真系统，打造一整套能降低企业生产成本，减低能源消耗，增加企业产品品质和提高员工高效管理的先进软件管理系统。
            </p>
            <p style="text-indent:2em ">
                CHARGERS畅哲，通过将大家熟知的企业管理ERP优化，实现精准、精细化对接MES系统，避免了企业软件投资的浪费，针对不同的制造业个性化定制组合，达到节约财力和人力的成本，基于交互的理念设计整套软件系统。系统已经成功应用于多家知名的制造企业，节约大量人工成本和能源消耗成本。
                CHARGERS畅哲致力于客户的定制化服务，努力做好企业的充电器，为中国的工业4.0 做出自己的贡献。
            </p>
            <a>查看详细 &gt;&gt;</a>
        </div>
        <div class="col-lg-4 borderleft">
            <h3>畅哲动态</h3>
            <ul>
                <li><a href="###">自动发货系统正式上线测试</a><span>2015-05-03</span></li>

            </ul>
            <a>查看详细 &gt;&gt;</a>
        </div>
    </div>
</div>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-lg-offset-3">
                <h3><a class="footera" href="###">关于我们</a></h3>
                <ul>
                    <li><a href="###" class="footera">了解我们</a></li>
                    <li><a href="###" class="footera">案例展示</a></li>
                    <li><a href="###" class="footera">发展历程</a></li>
                    <li><a href="###" class="footera">我们的观点</a></li>
                    <li><a href="###" class="footera">奋斗目标</a></li>
                </ul>
            </div>
            <div class="col-lg-2 ">
                <h3><a class="footera" href="###">我们的价值</a></h3>
                <ul>
                    <li><a href="###" class="footera">供应商管理</a></li>
                    <li><a href="###" class="footera">生产管理</a></li>
                    <li><a href="###" class="footera">仓储管理</a></li>
                    <li><a href="###" class="footera">物流管理</a></li>
                    <li><a href="###" class="footera">经销商管理</a></li>
                    <li><a href="###" class="footera">市场综合管理</a></li>
                </ul>
            </div>
            <div class="col-lg-2 ">
                <h3><a class="footera" href="###">价值</a></h3>
                <ul>
                    <li><a href="###" class="footera">食品行业</a></li>
                    <li><a href="###" class="footera">医药行业</a></li>
                    <li><a href="###" class="footera">农产品</a></li>
                    <li><a href="###" class="footera">日化产品</a></li>
                    <li><a href="###" class="footera">其他</a></li>
                </ul>
            </div>
            <div class="col-lg-2">
                <h3><a class="footera" href="###">伙伴招募</a></h3>
                <ul>
                    <li><a href="###" class="footera">销售代表</a></li>
                    <li><a href="###" class="footera">项目实施</a></li>
                    <li><a href="###" class="footera">项目经理</a></li>

                </ul>
            </div>
        </div>
    </div>
</div>
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p>北京畅哲科技优先公司　</p>
                <p class="specialp">北京海淀区八里庄路62号院1号楼1120室</p>
                <p>中文地区第一品牌 　SaaS服务/云计算专业供应商　云赢销　XTools企业维生素® 始于2004  服务电话： 88504263(24小时)</p>
            </div>
        </div>
    </div>
</div>
<div id="qq" class="hidden-xs" title="我们的客服 QQ：4000800170"  style="top: 460px; margin-right: 40px;">
    <div class="qq-icon"></div>
    <div>客服QQ</div>
</div>
</body>
</html>