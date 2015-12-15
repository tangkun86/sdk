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
                        <h1>客户端安装信息</h1>
                        <div class="publishCont">
                            <div class="handleToolbar">
                                <div class="handleLeft fL">
                                </div>
                                <div class="handleLeft fR"><?php echo $page ?></div>
                            </div>
                            <table class="contentTable">
                                <thead>
                                <tr>
                                    <th>Version</th>
                                    <th>Api Version</th>
                                    <th>Mobile</th>
                                    <th>Model</th>
                                    <th>Mnc</th>
                                    <th>APP ID</th>
                                    <th>Ifpay Paycode Version</th>
                                    <th>Ifpay Version</th>
                                    <th>获取时间</th>
                                </thead>
                                <tbody>
                                <?php foreach($list as $info){ ?>
                                    <tr>
                                        <td><?php echo $info['version'] ?></td>
                                        <td><?php echo $info['api_version'] ?></td>
                                        <td><?php echo $info['mobile'] ?></td>
                                        <td><?php echo $info['model'] ?></td>
                                        <td><?php echo $info['mnc'] ?></td>
                                        <td><?php echo $info['app_id'] ?></td>
                                        <td><?php echo $info['ifpay_paycode_version'] ?></td>
                                        <td><?php echo $info['ifpay_version'] ?></td>
                                        <td><?php echo date('Y-m-d H:i',$info['version']); ?></td>
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
