<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <title>选择应用</title>
    <link rel="stylesheet" href="<?php echo __ROOT__;?>/static/theme/simple/css/sms.css"/>
</head>
<body>

<div id="main-body">
    <?php if(count($apps) > 0){ ?>
        <form method="get" action="<?php echo U('Iaps/add');?>">
            <div class="consoleinfo" style="width: 500px; text-align:center;">
                <span>选择应用:</span>
                <select name="app_id" class="staninput">
                    <?php foreach ($apps as $app) { ?>
                        <option value="<?php echo $app['id'] ?>"><?php echo $app['name']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <br/>
            <p align="center"><input type="submit" value="下一步" class="blueBtn"></p>
        </form>
    <?php }else{ ?>
        <form method="get" action="<?php echo U('Iaps/add');?>">
            <div style="margin: 20px auto; border-radius: 5px; width:400px; border: 1px #ccc solid; padding: 20px;">
                <p align="center">请先创建应用</p>
                <br />
                <p align="center"><input type="submit" value="无法选择应用" class="blueBtn"></p>
            </div>
        </form>
    <?php } ?>
</div>

</body>
</html>