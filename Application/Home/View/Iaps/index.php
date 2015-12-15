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
                        <h1>IAP管理</h1>
                        <div class="publishCont">
                            <div class="handleToolbar">
                                <div class="handleLeft fL">
                                    <form  method="get" action="<?php echo U('Iaps/index'); ?>">
                                        <span>开发者用户名:</span>
                                        <select name="user_id">
                                            <option value="">ALL</option>
                                            <?php foreach($developers as $el){ ?>
                                                <option <?php showSelected($_REQUEST['user_id'],$el['user_id']); ?> value="<?php echo $el['user_id'] ?>" ><?php echo $el['username'] ?><?php if($el['company_name']){echo '['.$el['company_name'].']';} ?></option>
                                            <?php } ?>
                                        </select>
                                        <span>状态:</span>
                                        <select name="status" id="status">
                                            <option value="" >全部</option>
                                            <option value="2" >IAP新</option>
                                            <option value="3" >IAP计费点审核中</option>
                                            <option value="5" >IAP计费点审核不通过</option>
                                            <option value="4" >IAP待发布</option>
                                            <option value="1" >IAP已发布</option>
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
                                    <th>IAP</th>
                                    <th>IAP Key</th>
                                    <th>资费</th>
                                    <th>APP名称</th>
                                    <th>APP ID</th>
                                    <th>用户名</th>
                                    <th>公司名</th>
                                    <th>创建时间</th>
                                    <th>状态</th>
                                    <th>操作</th>
                                </thead>
                                <tbody>
                                <?php foreach($list as $iap){ ?>
                                    <tr>
                                        <!--<td><input name="" type="checkbox" value=""></td>-->
                                        <td><?php echo $iap['name'] ?></td>
                                        <td><?php echo $iap['iap_key'] ?></td>
                                        <td><?php echo $iap['pay_code'] ?></td>
                                        <td><?php echo $iap['app_name'] ?></td>
                                        <td><?php echo $iap['app_id'] ?></td>
                                        <td><?php echo $iap['username'] ?></td>
                                        <td><?php echo $iap['company_name'] ?></td>
                                        <td><?php echo date('Y-m-d H:i', $iap['created']); ?></td>
                                        <td><?php echo $iap['status_transfer'];?></td>
                                        <td>
                                            <?php if($iap['status'] == 3) {?>
                                                <a href="" class="adminRecommend">审核通过</a>
                                                <a href="#approval" class="adminRecommend adminDeny" iapId="<?php echo $iap['id']; ?>">审核拒绝</a>
                                            <?php } ?>
                                            <?php if($iap['status'] == 1) {?>
                                                <a href="#approval2" class="adminRecommend adminOffline" iapId="<?php echo $iap['id']; ?>">下线</a>
                                            <?php } ?>
                                            <a href="<?php echo U('Dev/Applications/viewIap',array('id'=>$iap['id'])); ?>" class="adminRecommend">详细</a>
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
        <form action=" " method="post">
            <div>
                <span>退回说明:</span> <textarea name="message"></textarea>
            </div>
            <div>
                <input type="submit" value="提交">
                <input name="id" id="denyId" type="hidden">
            </div>
        </form>
    </div>
    <div id="approval2">
        <form action="<?php ?>" method="post">
            <div>
                <span>下线说明:</span> <textarea name="message"></textarea>
            </div>
            <div>
                <input type="submit" value="提交">
                <input name="id" id="offlineId" type="hidden">
            </div>
        </form>
    </div>
</div>
<script>
    $(document).ready(function() {
        $(".adminDeny").fancybox();
        $(".adminDeny").click(function(){
            var id = $(this).attr("iapId");
            $("#denyId").val(id);
        })
        $(".adminOffline").fancybox();
        $(".adminOffline").click(function(){
            var id = $(this).attr("iapId");
            $("#offlineId").val(id);
        })
    });
</script>
</body>
</html>
