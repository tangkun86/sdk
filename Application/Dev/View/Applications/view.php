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
            <h1>应用资费信息</h1>
        </div>
        <div class="consoleinfo">
            <table border="1" cellspacing="0" bordercolor="#ccc" width = "80%" class="consoletab" id="tableSort">
                <thead>
                <tr>
                    <th onclick="sortTable('tableSort', 0)" style="min-width:150px;">IAP名</th>
                    <th onclick="sortTable('tableSort', 2)" style="min-width:100px; text-align:center;">IAP ID</th>
                    <th onclick="sortTable('tableSort', 1, 'int')" style="min-width:50px; text-align:center;">资费</th>
                    <th onclick="sortTable('tableSort', 3)" style="min-width:80px; text-align:center;">IAP状态</th>
                    <th onclick="sortTable('tableSort', 4, 'date')" style="min-width:120px; text-align:center;">创建时间</th>
                </tr>
                </thead>
                <tbody id="table2">
                <?php foreach($iaps as $iap){ ?>
                    <tr>
                        <td><?php echo $iap['name'] ?></td>
                        <td><?php echo $iap['iap_key'] ?></td>
                        <td><?php echo $iap['pay_code'] ?></td>
                        <td><?php echo $iap['status_transfer']  ?></td>
                        <td><?php echo date('Y-m-d H:i', $iap['created']); ?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
            <div class="consoleinfo" style="text-align:center;">
                <input onclick="history.back();" type="button" value="返回" class="blueBtn">
            </div>
        </div>
    </div>
</div><!-- end #main-body -->
</div><!-- For div:wrap-inne -->
</div><!-- For div:wrap -->

<?php include T('Layout/footer'); ?>
<script src="/static/js/ifpay.js" type="text/javascript"></script>
</body>
</html>
