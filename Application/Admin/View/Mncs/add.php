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
                        <h1>添加网络代码</h1>
                    </div>
                    <div class="publishCont">
                        <form action="<?php echo U('Mncs/insert'); ?>" method="post">
                            <p class="formItem">
                                <label for="mnc">MNC Code</label>
                                <input type="text"  name="mnc" class="formInput">
                            </p>
                            <p class="formItem">
                                <label for="operator">Operator</label>
                                <select type="text"  name="operator" class="formInput">
                                    <?php foreach($telcos as $tel){ ?>
                                        <option value="<?php echo $tel['operator'] ?>"><?php echo $tel['name'] ?></option>
                                    <?php } ?>
                                </select>
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
