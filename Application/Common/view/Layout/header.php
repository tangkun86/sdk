<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <title>开发者平台</title>
    <link rel="stylesheet" href="<?php echo __ROOT__;?>/static/theme/simple/css/dev.css"/>
    <link rel="stylesheet" href="<?php echo __ROOT__;?>/Public/css/pagination.css"/>
    <script type="text/javascript" src="<?php echo __ROOT__;?>/static/js/jquery.min.js"></script>
</head>
<script>
    $(function(){
        $(".languageOption").bind("click",function(){
            $(".otherLanguage").slideToggle();
        })
    })
</script>
<body>
<div id="wrap">
    <div id="wrap-inner" class="clearfix">
        <div id="header">
            <div class="container">
                <div class="logo fl">
                    <!--<a href="<?php /*echo __MODULE__ */?>" title="Ifpay"><img src="<?php echo __ROOT__;?>/static/theme/simple/img/logo.png" alt="Ifpay" border="0" /></a>-->
                </div>
                <div>
                    <a href="<?php echo U('Index/index'); ?>" target="_self"><strong><?php echo '开发者平台' ?></strong></a>
                </div>
                <?php if(isset($user)){ ?>
                    <div class="fr logoutBtn">
                        <a href="<?php echo U('users/logout'); ?>"><?php echo '登出' ?></a>
                    </div>
                    <?php if(isset($dev)){
                        if($dev->status == 1){
                            ?>
                            <div class="fr sysBtn <?php if(isset($action) && $action=='setting'){echo 'sysBtnOn'; }?>">
                                <a href="<?php echo U('dev/setting'); ?>"><?php echo '设置' ?></a>
                            </div>
                        <?php }}else{ ?>
                        <div class="fr sysBtn <?php if(isset($action) && $action=='setting'){echo 'sysBtnOn'; }?>">
                            <a href="<?php echo U('dev/setting'); ?>"><?php echo '设置' ?></a>
                        </div>
                    <?php }} ?>
                <div class="languageOption fr">
                    <span class="currentVersion" style="margin:0 10px 0 0; line-height:80px;">
						<img src="<?php echo __ROOT__;?>/static/theme/simple/img/country/<?php echo 'china'; ?>.png" alt="<?php echo 'language_version'; ?>"/>
                    </span>
                    <p class="otherLanguage">
                        <a href="<?php echo __ACTION__.'/l/en-us'; ?>" data-role='none' class="fl"><img src="<?php echo __ROOT__;?>/static/theme/simple/img/country/usa.png" align="absmiddle" alt="English"/>&nbsp;&nbsp;English</a>
                        <a href="<?php echo __ACTION__.'/l/zh-cn'; ?>" data-role='none' class="fl"><img src="<?php echo __ROOT__;?>/static/theme/simple/img/country/china.png" align="absmiddle" alt="简体中文"/>&nbsp;&nbsp;简体</a>
                    </p>
                </div>
            </div>
        </div>
        
