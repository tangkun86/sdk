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
                        <h1>订购明细查询</h1>
                        <div class="publishCont">
                            <div class="handleToolbar">
                                <div class="handleLeft fL">
                                    <form action="<?php echo U('Statistics/statDetail'); ?>" method="get">
                                        <span>开发者用户名:</span>
                                        <select name="user_id" id="userId">
                                            <option value="">ALL</option>
                                            <?php foreach($developers as $el){ ?>
                                                <option <?php showSelected($_REQUEST['userId'],$el['user_id']); ?> value="<?php echo $el['user_id'] ?>" ><?php echo $el['username'] ?><?php if($el['company_name']){echo '['.$el['company_name'].']';} ?></option>
                                            <?php } ?>
                                        </select>
                                        <span>应用名称:</span>
                                        <select name="appId"  id="appId">
                                            <option value="">ALL</option>
                                            <?php if(isset($apps)){
                                                foreach($apps as $a){ ?>
                                                    <option <?php showSelected($_REQUEST['appId'],$a['id']); ?> value="<?php echo $a['id'] ;?>"><?php echo $a['name'] ;?></option>
                                                <?php } } ?>
                                        </select>
                                        <span> 开始时间:</span>
                                        <input name="start" value="<?php echo $_REQUEST['start']; ?>"  class="select-datebox easyui-datebox">
                                        <span>结束时间:</span>
                                        <input name="end" value="<?php echo $_REQUEST['end']; ?>"  class="select-datebox easyui-datebox">
                                        <input type="submit" class="grayBtn">
                                    </form>
                                </div>
                                <div class="handleLeft fR"><?php echo $page ?></div>
                                <div>
                                </div>
                            </div>
                            <table class="contentTable">
                                <thead>
                                <tr>
                                    <th>手机</th>
                                    <th>运营商</th>
                                    <th>消费</th>
                                    <th>APP名称</th>
                                    <th>APP ID</th>
                                    <th>IAP</th>
                                    <th>IAP KEY</th>
                                    <th>开发者</th>
                                    <th>公司名</th>
                                    <th>发生时间</th>
                                    <th>状态</th>
                                    <th>客户端回执</th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($list as $el){ ?>
                                    <tr>
                                        <td><?php echo $el['mobile'] ?></td>
                                        <td><?php echo $el['operator'] ?></td>
                                        <td><?php echo $el['fee'] ?></td>
                                        <td><?php echo $el['name'] ?></td>
                                        <td><?php echo $el['app_id'] ?></td>
                                        <td><?php echo $el['iap_name'] ?></td>
                                        <td><?php echo $el['iap_key'] ?></td>
                                        <td><?php echo $el['username'] ?></td>
                                        <td><?php echo $el['company_name'] ?></td>
                                        <td><?php echo date('Y-m-d H:i', $el['created']); ?></td>
                                        <td><?php echo $el['status'] ?></td>
                                        <td><?php echo $el['client_status'] ?></td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div> </div>
                </div>
            </div></td>
    </tr>
    </tbody>
</table>
</body>
</html>
