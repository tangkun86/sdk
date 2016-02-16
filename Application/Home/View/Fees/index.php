<?php include T('Layout/header');?>

<table class="container">
    <col style="width:200px"/>
    <col style="width:"/>
    <tbody>
    <?php include T('Layout/header_menu'); ?>
    <tr>
        <?php include T('Layout/fees_left_menu'); ?>
        <td valign="top">
            <div class="rightSide fL">
                <div id="rightCont">
                    <div class="globalInfo">
                        <h1>计费点管理</h1>
                        <div class="publishCont">
                            <div class="handleToolbar">
                                <div class="handleLeft fL">
                                    <a href="<?php echo __MODULE__.'/Fees/add'; ?>" class="grayBtn">添加计费点</a>
                                </div>
                                <div class="handleLeft fR">
                                    <?php echo $page ?>
                                </div>
                            </div>
                            <table class="contentTable">
                                <thead>
                                <tr>
                                    <th>Pay Code</th>
                                    <th>资费描述</th>
                                    <th>状态</th>
                                    <th>创建时间</th>
                                    <th>修改时间</th>
                                    <th>操作</th>
                                </thead>
                                <tbody>
                                <?php foreach($list as $fee){ ?>
                                    <tr>
                                        <td><?php echo $fee['pay_code'] ?></td>
                                        <td><?php echo $fee['description'] ?></td>
                                        <td><?php echo $fee['status']==1 ? '上线' : '下线' ?></td>
                                        <td><?php echo date('Y-m-d H:i',$fee['created']); ?></td>
                                        <td><?php echo (!$fee['updated'] ? '--' : date('Y-m-d H:i',$fee['updated'])); ?></td>
                                        <td>
                                            <?php if($fee['status']!= 1){ ?>
                                                <a href="<?php echo __MODULE__.'/Fees/opration/value/1/id/'.$fee['id']; ?>" class="adminRecommend">发布</a>
                                                <a href="<?php echo __MODULE__.'/Fees/edit/id/'.$fee['id']; ?>" class="adminRecommend">编辑</a>
                                                <a href="<?php echo __MODULE__.'/Fees/del/id/'.$fee['id']; ?>" onclick="return confirm('确定要执行此操作吗？')" class="adminRecommend">删除</a>
                                            <?php }else{ ?>
                                                <a href="<?php echo __MODULE__.'/Fees/opration/value/2/id/'.$fee['id']; ?>" class="adminRecommend">取消发布</a>
                                            <?php } ?>
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
