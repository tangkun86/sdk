<?php include T('Layout/header');?>

<div id="main-body">
    <?php include T('Layout/left_menu');?>
    <div id="content">
        <div class="consoletitle">
            <h1>应用收入统计</h1>
        </div>
        <div class="consoleinfobar" >
            <form method="get" action="<?php echo U('Dev/Statistics/index'); ?>">
                <div class="fl" style="margin-right: 10px;">
                    <span>开始时间:</span>
                    <input name="start" value="<?php echo $start ?>" class="auto-kal kalendaeinput">
                    <span>结束时间:</span>
                    <input name="end" value="<?php echo $end ?>" class="auto-kal kalendaeinput">
                </div>
                <div class="fl">
                    <input type="submit" value="确认" class="grayBtn">
                </div>
                <div class="fr">
                    <strong>总收入：</strong>$<?php echo $total ?>
                </div>
            </form>
        </div>
        <div class="consoleinfo">
            <table class="consoletab" id="tableSort">
                <thead>
                <tr>
                    <th onclick="sortTable('tableSort', 0)">应用名</th>
                    <th onclick="sortTable('tableSort', 1)">应用ID</th>
                    <th onclick="sortTable('tableSort', 2)">收入</th>
                    <th onclick="sortTable('tableSort', 3)">操作</th>
                </thead>
                <tbody id="table2">
                <?php foreach($list as $stat){ ?>
                    <tr>
                        <td><?php echo $stat['name'] ?></td>
                        <td><?php echo $stat['app_id']  ?></td>
                        <td><?php echo $stat['total']; ?></td>
                        <td><a href="<?php echo U('Dev/Statistics/statDetail?appId='.$stat['application_id']); ?>" class="aBlueBtn"><span>计费明细</span></a></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div><!-- end #main-body -->
</div><!-- For div:wrap-inne -->
</div><!-- For div:wrap -->
<?php include T('Layout/footer'); ?>
<script type="text/javascript" src="/static/js/ifpay.js"></script>
<script src="/static/kalendae/build/kalendae.standalone.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="/static/kalendae/build/kalendae.css" type="text/css" charset="utf-8">
</body>
</html>