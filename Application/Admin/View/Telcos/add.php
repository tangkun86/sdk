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
                        <h1>添加电信运营商管理</h1>
                    </div>
                    <div class="publishCont">
                        <form action="<?php echo U('Telcos/insert'); ?>" method="post">

                            <p class="formItem">
                                <label for="name">Name</label>
                                <input type="text"  name="name" class="formInput">
                            </p>
                            <p class="formItem">
                                <label for="operator">Operator</label>
                                <input type="text"  name="operator" class="formInput">
                            </p>
                            <p class="formItem">
                                <label for="country">Country</label>
                                <input type="text"  name="country" class="formInput">
                            </p>
                            <p class="formItem">
                                <label for="code">Code</label>
                                <input type="text"  name="code" class="formInput">
                            </p>
                            <p class="submitDiv">
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
