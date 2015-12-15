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
                        <h1>修改计费点</h1>
                    </div>
                    <div class="publishCont">
                        <form action="<?php echo U('Fees/update'); ?>" method="post">
                            <p class="formItem">
                                <label for="version">Pay Code</label>
                                <input type="text"  name="pay_code" class="formInput" disabled value="<?php echo $vo['pay_code'] ?>">
                            </p>
                            <p class="formItem">
                                <label for="version">计费描述</label>
                                <input type="text"  name="description" class="formInput" value="<?php echo $vo['description'] ?>">
                            </p>
                            <p class="submitDiv">
                                <input name="id" type="hidden" value="<?php echo $vo['id'] ?>" >
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
