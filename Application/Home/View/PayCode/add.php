<?php include T('Layout/header');?>

<body>
<!--<div class="header"><h1>Admin Management</h1></div>-->
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
                        <h1>添加计费代码</h1>
                    </div>
                    <div class="publishCont">
                        <form action="<?php echo U('PayCode/insert'); ?>" method="post">

                            <p class="formItem">
                                <label for="version">Pay Code</label>
                                <select type="text"  name="pay_code" class="formInput">
                                    <?php foreach($fees as $fee){ ?>
                                        <option value="<?php echo $fee['pay_code'] ?>"><?php echo $fee['pay_code'] ?></option>
                                    <?php } ?>
                                </select>
                            </p>
                            <p class="formItem">
                                <label for="version">Service Code</label>
                                <input type="text" value="0000"  name="service_code" class="formInput">
                            </p>
                            <p class="formItem">
                                <label for="version">Code</label>
                                <input type="text" value="0000" name="code" class="formInput">
                            </p>
                            <p class="formItem">
                                <label for="version">Target Number</label>
                                <input type="text" value="0000" name="target" class="formInput">
                            </p>
                            <p class="formItem">
                                <label for="version">Operator</label>
                                <select type="text"  name="operator" class="formInput">
                                    <?php foreach($telcos as $tel){ ?>
                                        <option value="<?php echo $tel['operator'] ?>"><?php echo $tel['name'] ?></option>
                                    <?php } ?>
                                </select>
                            </p>
                            <p class="formItem">
                                <label for="version">Fee</label>
                                <input type="text"  name="fee" class="formInput">
                            </p>
                            <p class="formItem">
                                <label for="version">Local</label>
                                <select name="local">
                                    <option value="en">EN</option>
                                    <option selected="selected" value="cn">CN</option>
                                    <option value="my">MY</option>
                                    <option value="vn">VN</option>
                                </select>
                            </p>
                            <p class="formItem">
                                <label for="version">Local Fee</label>
                                <input type="text"  name="local_fee" class="formInput">
                            </p>
                            <p class="formItem">
                                <label for="version">Local Unit</label>
                                <input type="text" value="RMB"  name="local_unit" class="formInput">
                            </p>
                            <p class="formItem">
                                <label for="version">Version</label>
                                <input type="text" value="2" name="version" class="formInput">
                            </p>
                            <p class="submitDiv">
                                <input name="" type="submit" value="确定" class="blueBtn">
                                <input name="" type="button" onclick="history.back();" value="返回" class="blueBtn">
                            </p>
                        </form>
                    </div>
                </div>
            </div></td>
    </tr>
    </tbody>
</table>
</body>
</html>
