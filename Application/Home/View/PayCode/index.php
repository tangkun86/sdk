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
                                    <a href="<?php echo U('PayCode/add'); ?>" class="grayBtn">添加计费Code</a>
                                </div>
                                <div class="handleLeft fR">
                                    <?php echo $page ?>
                                </div>
                            </div>
                            <table class="contentTable">
                                <thead>
                                <tr>
                                    <th>Pay Code</th>
                                    <th>Service Code</th>
                                    <th>Code</th>
                                    <th>Target Number</th>
                                    <th>Operator</th>
                                    <th>Fee</th>
                                    <th>Local</th>
                                    <th>Local Fee</th>
                                    <th>Local Unit</th>
                                    <th>Version</th>
                                    <th>状态</th>
                                    <th>创建时间</th>
                                    <th>操作</th>
                                </thead>
                                <tbody>
                                <?php foreach($list as $code){ ?>
                                    <tr>
                                        <td><?php echo $code['pay_code'] ?></td>
                                        <td><?php echo $code['service_code'] ?></td>
                                        <td><?php echo $code['code'] ?></td>
                                        <td><?php echo $code['target'] ?></td>
                                        <td><?php echo $code['operator'] ?></td>
                                        <td><?php echo $code['fee'] ?></td>
                                        <td><?php echo $code['local'] ?></td>
                                        <td><?php echo $code['local_fee'] ?></td>
                                        <td><?php echo $code['local_unit'] ?></td>
                                        <td><?php echo $code['version'] ?></td>
                                        <td><?php echo $code['status']==1 ? '上线' : '下线'; ?></td>
                                        <td><?php echo date('Y-m-d H:i',$code['created']); ?></td>
                                        <td>
                                            <?php if($code['status']!= 1){ ?>
                                                <a href="<?php echo __MODULE__.'/PayCode/opration/value/1/id/'.$code['id']; ?>" class="adminRecommend">发布</a>
                                                <a href="<?php echo __MODULE__.'/PayCode/edit/id/'.$code['id']; ?>" class="adminRecommend">编辑</a>
                                                <a href="<?php echo __MODULE__.'/PayCode/del/id/'.$code['id']; ?>" onclick="return confirm('确定要执行此操作吗？')" class="adminRecommend">删除</a>
                                            <?php }else{ ?>
                                                <a href="<?php echo __MODULE__.'/PayCode/opration/value/2/id/'.$code['id']; ?>" class="adminRecommend">取消发布</a>
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
