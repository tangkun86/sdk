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
                        <h1>计费应用管理</h1>
                        <div class="publishCont">
                            <div class="handleToolbar">
                                <div class="handleLeft fL">
                                    <form  method="get" action="<?php echo U('Applications/index'); ?>">
                                        <span>开发者用户名:</span>
                                        <select name="user_id">
                                            <option value="">ALL</option>
                                            <?php foreach($developers as $el){ ?>
                                                <option value="<?php echo $el['user_id'] ?>" <?php showSelected($_REQUEST['user_id'],$el['user_id']); ?>><?php echo $el['username'] ?><?php if($el['company_name']){echo '['.$el['company_name'].']';} ?></option>
                                            <?php } ?>
                                        </select>
                                        <input type="submit" value="search" class="grayBtn">
                                    </form>
                                </div>
                                <div class="handleLeft fR"><?php echo $page ?></div>
                            </div>
                            <table class="contentTable">
                                <thead>
                                <tr>
                                    <!--<th><input name="" type="checkbox" value=""></th>-->
                                    <th>APP名称</th>
                                    <th>APP ID</th>
                                    <th>APP KEY</th>
                                    <th>用户名</th>
                                    <th>公司名</th>
                                    <th>创建时间</th>
                                    <th>状态</th>
                                    <th>操作</th>
                                </thead>
                                <tbody>
                                <?php foreach($list as $dev){ ?>
                                    <tr>
                                        <!--<td><input name="" type="checkbox" value=""></td>-->
                                        <td><?php echo $dev['name'] ?></td>
                                        <td><?php echo $dev['app_id'] ?></td>
                                        <td><?php echo $dev['app_key'] ?></td>
                                        <td><?php echo $dev['username'] ?></td>
                                        <td><?php echo $dev['company_name'] ?></td>
                                        <td><?php echo date('Y-m-d H:i', $dev['created']); ?></td>
                                        <td><?php echo $dev['status_transfer'];   ?></td>
                                        <td>
                                            <?php if($dev['status'] == 1) {?>
                                                <a href="<?php echo __MODULE__.'/Applications/opration/value/3/id/'.$dev['id']; ?>" class="adminRecommend">审核通过</a>
                                                <a href="<?php echo __MODULE__.'/Applications/opration/value/6/id/'.$dev['id']; ?>" class="adminRecommend">审核拒绝</a>
                                            <?php } ?>
                                            <?php if($dev['status'] == 2) {?>

                                                <a href="<?php echo __MODULE__.'/Applications/opration/value/7/id/'.$dev['id']; ?>" class="adminRecommend">测试通过</a>
                                                <a href="<?php echo __MODULE__.'/Applications/opration/value/8/id/'.$dev['id']; ?>" class="adminRecommend">测试拒绝</a>
                                            <?php } ?>
                                            <a href="<?php echo __MODULE__.'/Applications/viewApp/id/'.$dev['id']; ?>" class="adminRecommend">详细</a>
                                            <a href="<?php echo __MODULE__.'/Statistics/statDetail/appId/'.$dev['id']; ?>" class="adminRecommend">订购明细</a>
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
