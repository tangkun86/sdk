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
                        <h1>应用计费查询</h1>
                        <div class="publishCont">
                            <div class="handleToolbar">
                                <div class="handleLeft fL">
                                    <form action="<?php echo U('Statistics/statApp'); ?>" method="get">
                                        <span>开发者:</span>
                                        <select name="user_id">
                                            <option value="">ALL</option>
                                            <?php foreach($developers as $el){ ?>
                                                <option <?php showSelected($_REQUEST['user_id'],$el['user_id']); ?> value="<?php echo $el['user_id'] ?>" ><?php echo $el['username'] ?><?php if($el['company_name']){echo '['.$el['company_name'].']';} ?></option>
                                            <?php } ?>
                                        </select>
                                        <span> 开始时间:</span>
                                        <input name="start" value="<?php echo $_REQUEST['start']; ?>"  class="select-datebox easyui-datebox">
                                        <span>结束时间:</span>
                                        <input name="end" value="<?php echo $_REQUEST['end']; ?>" class="select-datebox easyui-datebox">
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
                                    <th>APP名称</th>
                                    <th>APP KEY</th>
                                    <th>用户名</th>
                                    <th>公司名</th>
                                    <th>收入</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($list as $el){ ?>
                                    <tr>
                                        <td><?php echo $el['name'] ?></td>
                                        <td><?php echo $el['app_key'] ?></td>
                                        <td><?php echo $el['username'] ?></td>
                                        <td><?php echo $el['company_name'] ?></td>
                                        <td><?php echo $el['total'] ?></td>
                                        <td>
                                            <a href="<?php echo __MODULE__.'/Statistics/statDetail/appId/'.$el['id'].'/userId/'.$el['user_id']; ?>" class="adminRecommend">详细</a>
                                        </td>
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
