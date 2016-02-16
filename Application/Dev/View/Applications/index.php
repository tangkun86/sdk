<?php include T('Layout/header');?>

<div id="main-body">
    <?php include T('Layout/left_menu');?>
    <div id="content">
        <div class="consoletitle">
            <h1>应用管理</h1>
        </div>
        <div class="consoleinfobar">
            <a href="<?php echo U('Dev/Applications/add'); ?>" class="blueBtn" target="_self">新增应用</a>
        </div>
        <div class="consoleinfo">
            <table class="consoletab" id="tableSort">
                <thead>
                <tr>
                    <th onclick="sortTable('tableSort', 1, 'int')">应用ID</th>
                    <th onclick="sortTable('tableSort', 2)">应用密匙</th>
                    <th onclick="sortTable('tableSort', 0)">应用名</th>
                    <th onclick="sortTable('tableSort', 3)">应用状态</th>
                    <th onclick="sortTable('tableSort', 4, 'date')">创建时间</th>
                    <th onclick="sortTable('tableSort', 5)">操作</th>
                </tr>
                </thead>
                <tbody id="table2">
                <?php foreach($list as $app){ ?>
                    <tr>
                        <td style="width:50px;text-align:center;"><?php echo $app['app_id'] ?></td>
                        <td style="width:100px;text-align:center;"><?php echo $app['app_key'] ?></td>
                        <td style="min-width:200px;"><?php echo $app['name'] ?></td>
                        <td style="min-width:60px;text-align:center;"><?php echo $app['status_transfer'] ?></td>
                        <td style="width:120px;text-align:center;"><?php echo date('Y-m-d H:i', $app['created']) ?></td>
                        <td style="">
                            <?php if($app['status'] == 7) {?>
                                <a href="<?php echo U('/Dev/Applications/opration/value/3?id='.$app['id']); ?>" class="aBlueBtn"><span>上线</span></a>
                            <?php } ?>
                            <?php if($app['status'] == 5 || $app['status'] == 8) {?>
                                <a href="<?php echo U('/Dev/Applications/opration/value/2?id='.$app['id']); ?>" class="aBlueBtn"><span>提交测试</span></a>
                            <?php } ?>
                            <?php if($app['status'] == 4 || $app['status'] == 6) {?>
                                <a href="<?php echo U('/Dev/Applications/opration/value/1?id='.$app['id']); ?>" class="aBlueBtn adminSubmit"><span>提交审批</span></a>
                            <?php } ?>
                            <a href="<?php echo U('/Dev/Iaps/add',array('appId'=>$app['id'])); ?>" class="aBlueBtn"><span>新增IAP</span></a>
                            <a href="<?php echo U('/Dev/Applications/view',array('appId'=>$app['id'])); ?>" class="aBlueBtn"><span>查看</span></a>
                            <a href="<?php echo U('/Dev/Applications/edit',array('id'=>$app['id'])); ?>" class="aBlueBtn"><span>编辑</span></a>
                            <a href="<?php echo U('/Dev/Applications/del',array('id'=>$app['id'])); ?>" class="aGrayBtn adminDel"><span>删除</span></a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
            <?php if(isset($page)){ ?>
                <div style="border: 1px solid #ccc; border-top: none; padding:10px;">
                    <?php echo $page ?>
                </div>
            <?php } ?>
        </div>
    </div>
</div><!-- end #main-body -->
</div><!-- For div:wrap-inne -->
</div><!-- For div:wrap -->
<?php include T('Layout/footer'); ?>
<script src="/static/js/ifpay.js" type="text/javascript"></script>
<script>
    $(document).ready(function() {
        $(".adminSubmit").click(function(){
            return confirm("确认提交？");
        });
        $(".adminDel").click(function(){
            return confirm("你确认要删除么？");
        });
    });
</script>
</body>
</html>