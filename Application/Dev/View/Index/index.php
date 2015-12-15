<?php include T('Layout/header');?>

<div id="main-body">
    <?php include T('Layout/left_menu');?>
    <div id="content">
        <div class="consoletitle">
            <h1><?php echo '开发者信息' ?></h1>
        </div>
        <div class="consoleinfo">
            <dl>
                <dd><strong>用户名：</strong><?php echo $user['username'] ?></dd>
                <dd><strong>电子邮箱：</strong><?php echo $user['email'] ?></dd>
                <dd><strong>联系人姓名：</strong><?php echo $developer['contact'] ?></dd>
                <dd><strong>手机号码：</strong><?php echo $developer['mobile'] ?></dd>
                <?php if($developer->type == 2){ ?>
                    <dd><strong>公司名称：</strong><?php echo $developer['company_name'] ?></dd>
                <?php } ?>
                <dd><strong>最后登录时间：</strong><?php echo date('Y-m-d H:i', $user['last_login']); ?></dd>
            </dl>
        </div>

        <div class="consoletitle">
            <h1>应用信息<span style="float: right;font-size:12px"><a href="<?php echo U('Applications/index'); ?>">详细</a></span></h1>
        </div>

        <div class="consoleinfo">
            <dl>
                <?php foreach($apps as $app) { ?>
                    <dd><strong>应用ID：</strong><?php echo $app['app_id'] ?>&nbsp;&nbsp;<strong>应用名：</strong><?php echo $app['name'] ?></dd>
                <?php } ?>
            </dl>
        </div>


        <div class="consoletitle">
            <h1>收入统计<span style="float: right;font-size:12px"><a href="<?php echo U('Statistics/index'); ?>">详细</a> </span></h1>
        </div>

        <div class="consoleinfo">
            <dl>
                <?php foreach($statistic as $stat) { ?>
                    <dd><strong>应用名：</strong><?php echo $stat['name'] ?>&nbsp;&nbsp;<strong>收入 ：</strong><?php echo $stat['total'] ?></dd>
                <?php } ?>
            </dl>
        </div>
    </div>
</div><!-- end #main-body -->
</div><!-- For div:wrap-inne -->
</div><!-- For div:wrap -->
<?php include T('Layout/footer');?>
</body>
</html>
