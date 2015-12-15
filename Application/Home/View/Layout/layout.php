<!DOCTYPE html>
<html>
<head lang="zh">
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
    <meta name="author" content="vvsai" />
    <meta name="Copyright" content="vvsai" />
    <meta name="Description" content="vvsai 威赛网" />
    <meta name="Keywords" content="vvsai 威赛网" />
    <title>vvsai  威赛</title>

    <link href="/Public/css/style/common.css" media="all" rel="stylesheet" type="text/css" />
    <link href="/Public/css/style/public.css" media="all" rel="stylesheet" type="text/css" />
    <link href="/Public/css/style/zm.css" media="all" rel="stylesheet" type="text/css" />
    <link href="/Public/css/style/main.css" media="all" rel="stylesheet" type="text/css" />
</head>
<?php
switch(CONTROLLER_NAME) {
    case 'Index':
        $body_id = 'match-page';
        break;

    case 'event':
        $body_id = 'activity-details';
        break;

    case 'circle':
        $body_id = 'topic-detail';
        break;

    case 'place':
        $body_id = 'venues-details';
        break;

    default:
        $body_id = 'index';
        break;
}
?>

<body id="<?php echo $body_id; ?>">
<!-- 引入头部 -->
<div id="header" class="clearfix">
    <div class="header-head">
        <div class="container clearfix" data-selector="headerHead">

            <div class="pull-left">
                    <a href="">登录</a>
                    <a href="">注册</a>
            </div>
        </div>
    </div>
    <div class="header-body">
        <div class="container clearfix" id="header-body">
            <a href="http://www.vvsai.com/"><img src="Public/images/logo.png" class="logo" alt="vvsai" /></a>
            <div class="pull-right user-info" data-selector="userCenterInfo">
            </div>
            <div class="header-adwrap" data-selector="headerAdv">
            </div>
        </div>
    </div>
    <div class="header-nav">
        <div class="container clearfix">
            <div id="navigation" >
                <a href="javascript:;" class="navigation-title">全部赛事活动<i></i></a>
                <ul class="navigation-list" <?php if(CONTROLLER_NAME) echo 'style="display: none"' ?> >
                    <li class="navigation-item">
                        <div class="navigation-item-static">
                            <dl>
                                <dt>马拉松/路跑</dt>
                                <dd><a href="">跑步</a><a href="">广州马拉松</a><a href="">四季跑</a></dd>
                            </dl>
                        </div>
                        <div class="navigation-item-content">

                            <ul>
                                <li><a href="">马拉松</a></li>
                                <li><a href="">路跑</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="navigation-item">
                        <div class="navigation-item-static">
                            <dl>
                                <dt>全民健身</dt>
                                <dd><a href="">健美</a><a href="">体育舞蹈</a><a href="">毽球</a><a href="">门球</a></dd>
                            </dl>
                        </div>
                        <div class="navigation-item-content">

                            <ul>
                                <li><a href="">龙舟</a></li>
                                <li><a href="">门球</a></li>
                                <li><a href="">健美</a></li>
                                <li><a href="">体育舞蹈</a></li>
                                <li><a href="">健美操</a></li>
                                <li><a href="">全健排舞</a></li>
                                <li><a href="">大力士</a></li>
                                <li><a href="">飞镖</a></li>
                                <li><a href="">武术</a></li>
                                <li><a href="">毽球</a></li>
                                <li><a href="">游泳</a></li>
                                <li><a href="">软式网球</a></li>
                                <li><a href="">保龄球</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="navigation-item">
                        <div class="navigation-item-static">
                            <dl>
                                <dt>球类运动</dt>
                                <dd><a href="">台球</a><a href="">篮球</a><a href="">羽毛球</a><a href="">高尔夫</a><a href="">排球</a><a href="">乒乓球</a><a href="">网球</a></dd>
                            </dl>
                        </div>
                        <div class="navigation-item-content">

                            <ul>
                                <li><a href="">羽毛球</a></li>
                                <li><a href="">台球</a></li>
                                <li><a href="">网球</a></li>
                                <li><a href="">足球</a></li>
                                <li><a href="">篮球</a></li>
                                <li><a href="">高尔夫球</a></li>
                                <li><a href="">橄榄球</a></li>
                                <li><a href="">排球</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="navigation-item">
                        <div class="navigation-item-static">
                            <dl>
                                <dt>户外运动</dt>
                                <dd><a href="">定向</a><a href="">模型</a><a href="">自行车</a><a href="">轮滑</a><a href="">钓鱼</a><a href="">攀岩</a><a href="">登山</a><a href="">铁人三项</a></dd>
                            </dl>
                        </div>
                        <div class="navigation-item-content">

                            <ul>
                                <li><a href="">自行车</a></li>
                                <li><a href="">轮滑</a></li>
                                <li><a href="">定向</a></li>
                                <li><a href="">攀岩</a></li>
                                <li><a href="">山地户外运动</a></li>
                                <li><a href="">登山</a></li>
                                <li><a href="">铁人三项</a></li>
                                <li><a href="">钓鱼</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="navigation-item">
                        <div class="navigation-item-static last">
                            <dl>
                                <dt>综合其他</dt>
                                <dd><a href="">信鸽</a><a href="">汽车</a><a href="">象棋</a><a href="">桥牌</a><a href="">电子竞技</a><a href="">跆拳道</a><a href="">摔跤</a><a href="">围棋</a></dd>
                            </dl>
                        </div>
                        <div class="navigation-item-content">

                            <ul>
                                <li><a href="">跆拳道</a></li>
                                <li><a href="">拔河</a></li>
                                <li><a href="">棋牌</a></li>
                                <li><a href="">体操</a></li>
                                <li><a href="">蹦床</a></li>
                                <li><a href="">田径</a></li>
                                <li><a href="">拳击</a></li>
                                <li><a href="">电子竞技</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <div id="site-navigation" style="margin-left:0px;">
                <ul class="site-navigation-list clearfix">
                    <li class="site-navigation-item"><a href="" class="menu-root current">赛事</a></li>
                    <li class="site-navigation-item"><a href="" class="menu-root current">关于我们</a></li>

                </ul>
            </div>
        </div>
    </div>
</div>


<?php /*echo __CONTENT__; */?>
{__CONTENT__}
<div id="footer">
    <div class="container footer">

        <div class="outlinks clearfix">
            <dl>
                <dt>关于我们</dt>
                <dd><a href="javascript:;">威赛简介</a></dd>
                <dd><a href="javascript:;">联系我们</a></dd>
                <dd><a href="javascript:;">合作伙伴</a></dd>
            </dl>
            <dl>
                <dt>加入威赛</dt>
                <dd><a href="javascript:;">招聘职位</a></dd>
            </dl>
            <dl>
                <dt>网站条款</dt>
                <dd><a href="javascript:;">版权声明</a></dd>
                <dd><a href="javascript:;">免责声明</a></dd>
            </dl>
        </div>

        <table class="copyright">
            <tbody>
            <tr>
                <td>
                    2014-2015 &copy; 威赛&#8482; All rights reserved.
                </td>
                <td class="service-phone">
                    客服电话：<span>028-86661822   18030771888</span><em>(周一至周五 9:00~18:00 法定节假日除外）</em>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
<script src="/Public/scripts/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="/Public/scripts/bootstrap.min.js" type="text/javascript"></script>
<script src="/Public/scripts/app/game.js" type="text/javascript"></script>

</body>
</html>
