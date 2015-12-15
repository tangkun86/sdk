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
                        <h1>修改计费代码</h1>
                    </div>
                    <div class="publishCont">
                        <form action="<?php echo U('PayCode/update'); ?>" method="post">

                            <p class="formItem">
                                <label for="version">Pay Code</label>
                                <select type="text"  name="pay_code" class="formInput">
                                    <?php foreach($fees as $fee){ ?>
                                        <option <?php if($vo['pay_code']===$fee['pay_code']) echo 'selected' ?> value="<?php echo $fee['pay_code'] ?>"><?php echo $fee['pay_code'] ?></option>
                                    <?php } ?>
                                </select>
                            </p>
                            <p class="formItem">
                                <label for="version">Service Code</label>
                                <input type="text"  name="service_code" value="<?php echo $vo['service_code'] ?>" class="formInput">
                            </p>
                            <p class="formItem">
                                <label for="version">Code</label>
                                <input type="text"  name="code" value="<?php echo $vo['code'] ?>" class="formInput">
                            </p>
                            <p class="formItem">
                                <label for="version">Target Number</label>
                                <input type="text"  name="target" value="<?php echo $vo['target'] ?>"  class="formInput">
                            </p>
                            <p class="formItem">
                                <label for="version">Operator</label>
                                <select type="text"  name="operator" class="formInput">
                                    <?php foreach($telcos as $tel){ ?>
                                        <option <?php if($vo['operator']===$tel['operator']) echo 'selected' ?> value="<?php echo $tel['operator'] ?>"><?php echo $tel['name'] ?></option>
                                    <?php } ?>
                                </select>
                            </p>
                            <p class="formItem">
                                <label for="version">Fee</label>
                                <input type="text"  name="fee" value="<?php echo $vo['fee'] ?>" class="formInput">
                            </p>
                            <p class="formItem">
                                <label for="version">Local</label>
                                <select name="local">
                                    <option <?php if($vo['local']==='EN') echo 'selected' ?> value="en">EN</option>
                                    <option <?php if($vo['local']==='cn') echo 'selected' ?> value="cn">CN</option>
                                    <option <?php if($vo['local']==='my') echo 'selected' ?> value="my">MY</option>
                                    <option <?php if($vo['local']==='VN') echo 'selected' ?> value="vn">VN</option>
                                </select>
                            </p>
                            <p class="formItem">
                                <label for="version">Local Fee</label>
                                <input type="text"  name="local_fee" value="<?php echo $vo['local_fee'] ?>" class="formInput">
                            </p>
                            <p class="formItem">
                                <label for="version">Local Unit</label>
                                <input type="text"  name="local_unit" value="<?php echo $vo['local_unit'] ?>" class="formInput">
                            </p>
                            <p class="formItem">
                                <label for="version">Version</label>
                                <input type="text"  name="version" value="<?php echo $vo['version'] ?>" class="formInput">
                            </p>
                            <p class="submitDiv">
                                <input type="hidden" name="id" value="<?php echo $vo['id'] ?>">
                                <input type="submit" value="确定" class="blueBtn">
                                <input type="button" onclick="history.back();" value="返回" class="blueBtn">
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
