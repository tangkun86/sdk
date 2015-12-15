<?php include T('Layout/header');?>

<div id="main-body">
    <?php include T('Layout/left_menu');?>
    <div id="content">
        <div class="consoletitle">
            <h1>计费明细</h1>
        </div><?php $appId = $_REQUEST['appId'];?>
        <div class="consoleinfobar">
            <form method="get" action="<?php echo U('Dev/Statistics/statDetail',array('app_id'=>$appId)); ?>" >
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
                    <th onclick="sortTable('tableSort', 0)">手机号码</th>
                    <th onclick="sortTable('tableSort', 1)">运营商</th>
                    <th onclick="sortTable('tableSort', 2)">消费金额</th>
                    <th onclick="sortTable('tableSort', 3)">应用名</th>
                    <th onclick="sortTable('tableSort', 4)">应用ID</th>
                    <th onclick="sortTable('tableSort', 5)">IAP名</th>
                    <th onclick="sortTable('tableSort', 6)">IAP ID</th>
                    <th onclick="sortTable('tableSort', 7),'date'">发生时间</th>
                    <th onclick="sortTable('tableSort', 8)">计费状态</th>
                    <th onclick="sortTable('tableSort', 9)">客户端回执</th>
                </thead>
                <tbody id="table2">
                <?php foreach($list as $stat){ ?>
                    <tr>
                        <td><?php echo $stat['mobile'] ?></td>
                        <td><?php echo $stat['operator']  ?></td>
                        <td><?php echo $stat['fee']  ?></td>
                        <td><?php echo $stat['name']  ?></td>
                        <td><?php echo $stat['app_id']  ?></td>
                        <td><?php echo $stat['iap_name']  ?></td>
                        <td><?php echo $stat['iap_key']  ?></td>
                        <td><?php echo date('Y-m-d H:i', $stat['created']); ?></td>
                        <td><?php echo $stat['status_transfer'] ?></td>
                        <td><?php echo $stat['client_status'] ?></td>
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