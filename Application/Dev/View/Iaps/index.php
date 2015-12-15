<?php include T('Layout/header');?>

<div id="main-body">
    <?php include T('Layout/left_menu');?>
    <div id="content">
        <div class="consoletitle">
            <h1>应用内购管理</h1>
        </div>
        <div class="consoleinfobar" >
            <form action="<?php echo U('Dev/Iaps/index'); ?>" method="get">
                <div class="fl" style="margin-right: 10px;">
                    <a href="<?php echo U('Iaps/selectApp'); ?>" title="申请IAP" class="blueBtn" id="createIap">申请IAP</a>
                </div>
                <div class="fl" style="margin-right: 10px;">
                    LAP状态
                    <select name="status" id="status" class="stanselect">
                        <option value="" >全部</option>
                        <option <?php echo showSelected($_REQUEST['status'],2);?> value="2">新建</option>
                        <option <?php echo showSelected($_REQUEST['status'],3);?> value="3">审核中</option>
                        <option <?php echo showSelected($_REQUEST['status'],5);?> value="5">审核失败</option>
                        <option <?php echo showSelected($_REQUEST['status'],4);?> value="4">待上线</option>
                        <option <?php echo showSelected($_REQUEST['status'],1);?> value="1">已上线</option>
                    </select>
                </div>
                <div class="fl">
                    <input type="submit" value="查询" class="grayBtn">
                </div>
            </form>
        </div>
        <div class="consoleinfo">
            <table class="consoletab" id="tableSort">
                <thead>
                <tr>
                    <th onclick="sortTable('tableSort', 1)">IAP ID</th>
                    <th onclick="sortTable('tableSort', 0)">IAP 名</th>
                    <th onclick="sortTable('tableSort', 2)">资费码</th>
                    <th onclick="sortTable('tableSort', 4)">应用ID</th>
                    <th onclick="sortTable('tableSort', 3)">应用名</th>
                    <th onclick="sortTable('tableSort', 5)">IAP状态</th>
                    <th onclick="sortTable('tableSort', 6, 'date')">创建时间</th>
                    <th onclick="sortTable('tableSort', 7)">删除</th>
                </tr>
                </thead>
                <tbody id="table2">
                <?php foreach($list as $iap){ ?>
                    <tr>
                        <td><?php echo $iap['iap_key']  ?></td>
                        <td><?php echo $iap['name'] ?></td>
                        <td style="min-width:50px; text-align:center;"><?php echo $iap['pay_code']  ?></td>
                        <td><?php echo $iap['app_id']  ?></td>
                        <td><?php echo $iap['app_name']  ?></td>
                        <td style="min-width:50px; text-align:center;">
                            <?php
                                echo $iap['status_transfer']
                            ?>
                        </td>
                        <td><?php echo date('Y-m-d H:i', $iap['created']); ?></td>
                        <td>
                            <?php if($iap['status'] == 2){ ?>
                                <a href="<?php echo U('Dev/Iaps/opration/value/3?id='.$iap['id']); ?>" class="aBlueBtn adminSubmit"><span>提交</span></a>
                            <?php } ?>
                            <?php if($iap['status'] == 4){ ?>
                                <a href="<?php echo U('Dev/Iaps/opration/value/1?id='.$iap['id']); ?>" class="aBlueBtn"><span>上线</span></a>
                            <?php } ?>
                            <?php if($iap['status'] == 1){ ?>
                                <a href="<?php echo U('Dev/Iaps/opration/value/4?id='.$iap['id']); ?>" class="aBlueBtn"><span>下线</span></a>
                            <?php } ?>
                            <a href="<?php echo U('Dev/Iaps/view?iapId='.$iap['id']); ?>" class="aBlueBtn"><span>查看</span></a>
                            <a href="<?php echo U('Dev/Iaps/edit?iapId='.$iap['id']); ?>" class="aBlueBtn"><span>编辑</span></a>
                            <a href="<?php echo U('Dev/Iaps/del?id='.$iap['id']); ?>" class="aGrayBtn adminDel"><span>删除</span></a>
                        </td>
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
<link rel="stylesheet" href="<?php echo __ROOT__;?>/static/fancybox/jquery.fancybox.css"/>
<script type="text/javascript" src="<?php echo __ROOT__;?>/static/js/ifpay.js"></script>
<script type="text/javascript" src="<?php echo __ROOT__;?>/static/fancybox/jquery.fancybox.js"></script>
<script>
    $(document).ready(function() {
        $("#createIap").fancybox();

        $(".adminSubmit").click(function(){
            return confirm("你确定要提交么？");
        });

        $(".adminDel").click(function(){
            return confirm("你确定要删除么?");
        });
    });
</script>
</body>
</html>
