<?php include T('Layout/header');?>

<body>

<table class="container">
    <col style="width:200px"/>
    <col style="width:"/>
    <tbody>
    <?php include T('Layout/header_menu'); ?>
    <tr>
        <td valign="top"><div class="leftSide fL">
                <!--<h1 class="categoryTitle">后台管理</h1>-->
                <a href="#" class="menuItem menuSelect">首页</a>
            </div></td>
        <td valign="top"><div class="rightSide fL">
                <div id="rightCont">
                    <!--service info strat-->
                    <div class="serviceInfo">
                        <h1>服务器信息</h1>
                        <dl>
                            <dd><strong>PHP程式版本：</strong><?PHP echo PHP_VERSION; ?></dd>
                            <dd><strong>服务器操作系统：</strong><?PHP echo PHP_OS; ?></dd>
                            <dd><strong>运行环境：</strong><?PHP echo $_SERVER ['SERVER_SOFTWARE']; ?></dd>
                            <dd><strong>MySQL版本：</strong><?php $mysql_info = M()->query('select version() as version;');echo $mysql_info[0]['version'];?></dd>
                            <dd><strong>MySQL数据库持续连接 ：</strong><?php echo @get_cfg_var("mysql.allow_persistent")?"是 ":"否"; ?></dd>
                            <dd><strong>MySQL最大连接数：</strong><?php echo @get_cfg_var("mysql.max_links")==-1 ? "不限" : @get_cfg_var("mysql.max_links");?></dd>
                            <dd><strong>上传限制：</strong><?PHP echo get_cfg_var ("upload_max_filesize")?get_cfg_var ("upload_max_filesize"):"不允许上传附件"; ?></dd>
                            <dd><strong>最大执行时间：</strong><?PHP echo get_cfg_var("max_execution_time")."秒 "; ?></dd>
                            <dd><strong>脚本运行占用最大内存：</strong><?PHP echo get_cfg_var ("memory_limit")?get_cfg_var("memory_limit"):"无" ?></dd>
                            <dd><strong>获得服务器系统时间：</strong><?php date_default_timezone_set ('PRC'); echo date("Y-m-d G:i:s");?></dd>
                        </dl>
                    </div>
                    <!--service info end-->
                    <!--service info strat-->
                    <div class="serviceInfo">
                        <h1>用户信息</h1>
                        <dl>
                            <dd><strong>当前在线：</strong>5</dd>
                            <dd><strong>全部用户：</strong>555</dd>
                            <dd><strong>有效用户：</strong>500</dd>
                        </dl>
                    </div>
                    <!--service info end-->
                    <!--service info strat-->
                    <div class="serviceInfo">
                        <h1>开发团队</h1>
                        <dl>
                            <dd><strong>程序开发者：</strong>FAF-Rei </dd>
                            <dd><strong>web前端：</strong>顽主</dd>
                        </dl>
                    </div>
                    <!--service info end-->
                </div>
            </div></td>
    </tr>
    </tbody>
</table>
</body>
</html>
