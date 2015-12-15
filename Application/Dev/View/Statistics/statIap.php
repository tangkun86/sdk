<?php include T('Layout/header');?>

<div id="main-body">
    <?php include T('Layout/left_menu');?>
    <div id="content">
        <div class="consoletitle">
            <h1>内购收入统计</h1>
        </div>
        <div class="consoleinfobar" >
            <form method="get" action="<?php echo U('Dev/Statistics/statIap'); ?>">
                <div class="fl" style="margin-right: 10px;">
                    <select name="appId" class="stanselect">
                        <option value="">全部</option>
                        <?php foreach($apps as $el){ ?>
                            <option value="<?php echo $el['id'] ?>" <?php echo showSelected($appId,$el['id']); ?>><?php echo $el['name'] ?></option>
                        <?php } ?>
                    </select>
                    <span>开始时间:</span>
                    <input name="start" value="<?php echo $start ?>" class="auto-kal kalendaeinput">
                    <span>结束时间:</span>
                    <input name="end" value="<?php echo $end ?>" class="auto-kal kalendaeinput">
                </div>
                <div class="fl">
                    <input type="submit" value="确认" class="grayBtn">
                </div>
            </form>
        </div>
        <div class="consoleinfo">
            <table class="consoletab"  id="tableSort">
                <thead>
                <tr>
                    <th onclick="sortTable('tableSort', 0)">IAP名</th>
                    <th onclick="sortTable('tableSort', 0)">IAP ID</th>
                    <th onclick="sortTable('tableSort', 0)">应用名</th>
                    <th onclick="sortTable('tableSort', 0)">应用ID</th>
                    <th onclick="sortTable('tableSort', 0)">收入</th>
                </tr>
                </thead>
                <tbody id="table2">
                <?php foreach($list as $stat){ ?>
                    <tr>
                        <td style="text-align:center"><?php echo $stat['iap_name']  ?></td>
                        <td style="text-align:center"><?php echo $stat['iap_key']  ?></td>
                        <td style="text-align:center"><?php echo $stat['name']  ?></td>
                        <td style="text-align:center"><?php echo $stat['app_id']  ?></td>
                        <td style="text-align:center">$<?php echo $stat['total']  ?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
            <?php if($page){ ?>
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
<script type="text/javascript" src="/static/js/ifpay.js"></script>
<script src="/static/kalendae/build/kalendae.standalone.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="/static/kalendae/build/kalendae.css" type="text/css" charset="utf-8">
</body>
</html>