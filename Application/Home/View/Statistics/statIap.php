<?php include T('Layout/header');?>

<table class="container">
    <col style="width:200px"/>
    <col style="width:"/>
    <tbody>
    <?php include T('Layout/header_menu'); ?>
    <tr>
        <?php include T('Layout/developers_left_menu'); ?>
        <td valign="top">
            <div class="rightSide fL">
                <div id="rightCont">
                    <div class="globalInfo">
                        <h1>IAP计费统计</h1>
                        <div class="publishCont">
                            <div class="handleToolbar">
                                <div class="handleLeft fL">
                                    <form action="<?php echo U('Statistics/statIap'); ?>" method="get">
                                        <div class="date-div">
                                            <span>开发者用户名:</span>
                                            <select name="user_id" id="userId">
                                                <option value="">ALL</option>
                                                <?php foreach($developers as $el){ ?>
                                                    <option <?php showSelected($_REQUEST['user_id'],$el['user_id']); ?> value="<?php echo $el['user_id'] ?>" ><?php echo $el['username'] ?><?php if($el['company_name']){echo '['.$el['company_name'].']';} ?></option>
                                                <?php } ?>
                                            </select>
                                            <span>应用名称:</span>
                                            <select name="appId"  id="appId">
                                                <option value="">ALL</option>
                                            </select>

                                            <span>开始时间:</span>
                                            <input name="start" value="<?php echo $_REQUEST['start']; ?>" class="select-datebox easyui-datebox">
                                            <span>结束时间:</span>
                                            <input name="end" value="<?php echo $_REQUEST['end']; ?>" class="select-datebox easyui-datebox">
                                            <input type="submit" class="grayBtn">
                                        </div>
                                    </form>
                                </div>
                                <div class="handleLeft fR"><?php echo $page ?></div>
                            </div>
                            <table class="contentTable">
                                <thead>
                                <tr>
                                    <th>IAP</th>
                                    <th>IAP KEY</th>
                                    <th>APP名称</th>
                                    <th>APP ID</th>
                                    <th>用户名</th>
                                    <th>公司名</th>
                                    <th>收入</th>
                                </thead>
                                <tbody>
                                <?php foreach($list as $stat){ ?>
                                    <tr>
                                        <td><?php echo $stat['iap_name']  ?></td>
                                        <td><?php echo $stat['iap_key']  ?></td>
                                        <td><?php echo $stat['name']  ?></td>
                                        <td><?php echo $stat['app_id']  ?></td>
                                        <td><?php echo $stat['username']  ?></td>
                                        <td><?php echo $stat['company_name']  ?></td>
                                        <td><?php echo $stat['total']  ?></td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div></td>
    </tr>
    </tbody>
</table>
</body>
</html>
