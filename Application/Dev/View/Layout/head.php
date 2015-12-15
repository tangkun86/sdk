<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <title><?php echo __('ifpay_dev_head_title') ?></title>
    <link rel="stylesheet" href="/static/theme/simple/css/dev.css"/>
    <script type="text/javascript" src="/static/js/jquery.min.js"></script>
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
                    <a href="http://www.ifpay.cn/" title="Ifpay"><img src="/static/theme/simple/img/logo.png" alt="Ifpay" border="0" /></a>
                </div>
                <div>
                    <a href="<?php echo URL::site('dev/index'); ?>" target="_self"><strong><?php echo __('ifpay_dev_nav_index') ?></strong></a>
                </div>
                <?php if(isset($user)){ ?>
                    <div class="fr logoutBtn">
                        <a href="<?php echo URL::site('user/logoutDev'); ?>"><?php echo __('ifpay_dev_nav_logout') ?></a>
                    </div>
                    <?php if(isset($dev)){
                        if($dev->status == 1){
                            ?>
                            <div class="fr sysBtn <?php if(isset($action) && $action=='setting'){echo 'sysBtnOn'; }?>">
                                <a href="<?php echo URL::site('dev/setting'); ?>"><?php echo __('ifpay_dev_nav_config') ?></a>
                            </div>
                        <?php }}else{ ?>
                        <div class="fr sysBtn <?php if(isset($action) && $action=='setting'){echo 'sysBtnOn'; }?>">
                            <a href="<?php echo URL::site('dev/setting'); ?>"><?php echo __('ifpay_dev_nav_config') ?></a>
                        </div>
                    <?php }} ?>
                <div class="languageOption fr">
                    <span class="currentVersion" style="margin:0 10px 0 0; line-height:80px;">
						<img src="/static/theme/simple/img/country/<?php echo __('language_version'); ?>.png" alt="<?php echo __('language_version'); ?>"/>
                    </span>
                    <p class="otherLanguage">
                        <a href="<?php echo URL::site('user/lang/en-us'); ?>" data-role='none' class="fl"><img src="/static/theme/simple/img/country/usa.png" align="absmiddle" alt="English"/>&nbsp;&nbsp;English</a>
                        <a href="<?php echo URL::site('user/lang/zh-cn'); ?>" data-role='none' class="fl"><img src="/static/theme/simple/img/country/china.png" align="absmiddle" alt="简体中文"/>&nbsp;&nbsp;简体</a>
                    </p>
                </div>
            </div>
        </div>
        
