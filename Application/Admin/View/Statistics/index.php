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
                        <h1>开发者计费统计</h1>
                        <div class="publishCont">
                            <div class="handleToolbar">
                                <div class="handleLeft fL">
                                    <form action="<?php echo U('Statistics/statDev'); ?>" method="get">
                                        <div class="date-div"><span> 开始时间:</span>
                                            <input name="start" value="<?php echo $_REQUEST['start']; ?>"  class="select-datebox easyui-datebox">
                                            <span>结束时间:</span>
                                            <input name="end" value="<?php echo $_REQUEST['end']; ?>"  class="select-datebox easyui-datebox">
                                            <input type="submit" class="grayBtn">
                                        </div>
                                    </form>
                                </div>
                                <div class="handleLeft fR"><?php echo $page ?></div>
                                <div>

                                </div>
                            </div>
                            <table class="contentTable">
                                <thead>
                                <tr>
                                    <th>用户名</th>
                                    <th>公司名称</th>
                                    <th>收入</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($list as $el){ ?>
                                    <tr>
                                        <td><?php echo $el['username'] ?></td>
                                        <td><?php echo $el['company_name'] ?></td>
                                        <td><?php echo $el['total'] ?></td>
                                        <td>
                                            <a href="<?php echo __MODULE__.'/Statistics/statDetail/userId/'.$el['user_id']; ?>" class="adminRecommend">详细</a>
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
