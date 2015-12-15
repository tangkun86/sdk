<?php include T('Layout/header');?>

<div id="main-body">
    <?php include T('Layout/left_menu');?>
    <div id="content">
        <div class="consoletitle">
            <h1>应用基本信息</h1>
        </div>
        <div class="consoleinfo">
            <dl>
                <dd><strong>应用ID：</strong><?php echo $app->app_id ?></dd>
                <dd><strong>应用名：</strong><?php echo $app->name ?></dd>
                <dd><strong>应用密匙：</strong><?php echo $app->app_key ?></dd>
                <dd><strong>应用描述：</strong><?php echo $app->desc ?></dd>
            </dl>
        </div>

        <div class="consoletitle">
            <h1>计费点信息</h1>
        </div>

        <div class="consoleinfo">
            <dl>
                <dd><strong>IAP ID：</strong><?php echo $iap->iap_key ?></dd>
                <dd><strong>IAP名：</strong><?php echo $iap->name ?></dd>
                <dd><strong>资费：</strong><?php echo $iap->pay_code; ?></dd>
                <dd><strong>触发计费说明：</strong><?php echo $iap->trigger_desc ?></dd>
                <dd><strong>计费点位置描述：</strong><?php echo $iap->position_desc ?></dd>
            </dl>
        </div>
    </div>
</div><!-- end #main-body -->
</div><!-- For div:wrap-inne -->
</div><!-- For div:wrap -->

<?php include T('Layout/footer'); ?>
</body>
</html>