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
                        <h1>运营商列表</h1>
                        <div class="publishCont">
                            <div class="handleToolbar">
                                <div class="handleLeft fL">
                                    <a href="<?php echo U('Telcos/add'); ?>" class="grayBtn">添加运营商</a>
                                </div>
                                <div class="handleLeft fR"><?php echo $page ?></div>
                            </div>
                            <table class="contentTable">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Operator</th>
                                    <th>Country</th>
                                    <th>Code</th>
                                    <th>创建时间</th>
                                    <th>操作</th>
                                </thead>
                                <tbody>
                                <?php foreach($list as $code){ ?>
                                    <tr>
                                        <td><?php echo $code['name'] ?></td>
                                        <td><?php echo $code['operator'] ?></td>
                                        <td><?php echo $code['country'] ?></td>
                                        <td><?php echo $code['code'] ?></td>
                                        <td><?php echo date('Y-m-d H:i',$code['created']); ?></td>
                                        <td>
                                            <a href="<?php echo __MODULE__.'/Telcos/edit/id/'.$code['id']; ?>" class="adminRecommend">编辑</a>
                                            <a href="<?php echo __MODULE__.'/Telcos/del_true/id/'.$code['id']; ?>" onclick="return confirm('删除将不可恢复！')" class="adminRecommend">删除</a>
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
