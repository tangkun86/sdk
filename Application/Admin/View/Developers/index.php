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
                        <h1>开发者管理</h1>
                        <div class="publishCont">
                            <div class="handleToolbar">
                                <div class="handleLeft fL">

                                </div>
                                <div class="handleLeft fR"><?php echo $page ?></div>
                            </div>
                            <table class="contentTable">
                                <thead>
                                <tr>
                                    <!--<th><input name="" type="checkbox" value=""></th>-->
                                    <th>用户名</th>
                                    <th>公司名称</th>
                                    <th>公司备字</th>
                                    <th>联系人</th>
                                    <th>联系电话</th>
                                    <th>创建时间</th>
                                    <th>状态</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($list as $dev){ ?>
                                    <tr>
                                        <!--<td><input name="" type="checkbox" value=""></td>-->
                                        <td><?php echo $dev['username'] ?></td>
                                        <td><?php echo $dev['company_name'] ?></td>
                                        <td><?php echo $dev['company_license'] ?></td>
                                        <td><?php echo $dev['contact'] ?></td>
                                        <td><?php echo $dev['mobile'] ?></td>
                                        <td><?php echo date('Y-m-d H:i', $dev['created']); ?></td>
                                        <td><?php echo $dev['status_transfer'];?> </td>
                                        <td>
                                            <?php if($dev['status'] == 4) {?>
                                                <a href="<?php echo __MODULE__.'/Developers/opration/value/1/id/'.$dev['id']; ?>" class="adminRecommend">审核通过</a>
                                                <a href="#approval" class="adminRecommend adminDeny" devUid="<?php echo $dev['user_id']; ?>" devId="<?php echo $dev['id']; ?>">审核拒绝</a>
                                            <?php } ?>
                                            <a href="<?php echo __MODULE__.'/Applications/index/user_id/'.$dev['user_id']; ?>" class="adminRecommend">查看应用</a>
                                            <a href="<?php echo __MODULE__.'/Statistics/statApp/user_id/'.$dev['user_id']; ?>" class="adminRecommend">查看计费</a>
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

<div style="display: none;">
    <div id="approval">
        <form action="<?php echo U('Developers/denyDev'); ?>" method="post">
            <div>
                <span>退回说明:</span> <textarea name="message"></textarea>
            </div>
            <div>
                <input name="id" id="id" type="hidden">
                <input name="user_id" id="uid" type="hidden">
                <input type="submit" value="提交">
            </div>
        </form>
    </div>
</div>
<script>
    $(document).ready(function() {
        $(".adminDeny").fancybox();
        $(".adminDeny").click(function(){
            var id = $(this).attr("devId");
            var uid = $(this).attr("devUid");
            $("#id").val(id);
            $("#uid").val(uid);
            //console.log(id);
        })
    });
</script>
</body>
</html>
