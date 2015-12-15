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
                        <h1 class="iap-topic">应用基本资料</h1>

                        <div class="app-row">
                            <label class="iap-label"><strong>应用名称：</strong></label>
                            <span class="app-info"><?php echo $app['name'] ?></span></div>
                        <div class="app-row">
                            <label class="iap-label"><strong>应用描述：</strong></label>
                            <span class="app-info"><?php echo $app['desc'] ?></span></div>
                        <div class="app-row">
                            <label class="iap-label"><strong>APP ID：</strong></label>
                            <span class="app-info"><?php echo $app['app_id'] ?></span></div>
                        <div class="app-row">
                            <label class="iap-label"><strong>APP KEY：</strong></label>
                            <span class="app-info"><?php echo $app['app_key'] ?></span></div>
                        <h1 class="iap-topic">计费点信息</h1>

                        <table class="contentTable">
                            <thead>
                            <tr>
                                <th>IAP名字</th>
                                <th>IAP Key</th>
                                <th>资费</th>
                                <th>状态</th>
                                <th>发布时间</th>
                            </thead>
                            <tbody>
                            <?php foreach($iaps as $iap){ ?>
                                <tr>
                                    <td><?php echo $iap['name'] ?></td>
                                    <td><?php echo $iap['iap_key']  ?></td>
                                    <td><?php echo $iap['pay_code'] ?></td>
                                    <td><?php echo $iap['status'] ?></td>
                                    <td><?php echo date('Y-m-d H:i', $iap['created']); ?></td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>


                        <p class="submitDiv">
                            <input name="" onclick="history.back();" type="button" value="返回" class="blueBtn">
                        </p>
                    </div>
                </div>
            </div>
        </td>
    </tr>
    </tbody>
</table>
</body>
</html>
