<?php include T('Layout/header'); ?>

<div id="devlogin">
    <div class="loginwrap">
        <h1><?php echo L('site_name');?></h1>
        <form method="post" action="<?php echo U('Users/loginDev'); ?>">
            <div class="loginfo rcolor">
                <?php  echo $error;?>
            </div>
            <div class="loginfo">
                <input type="text"  class="staninput" id="username" name="username" value="用户名" style="width: 400px;" onfocus="javascript:if('用户名'==this.value)this.value='';" onblur="javascript:if(''==this.value)this.value='用户名'" >
            </div>
            <div class="loginfo">
                <input type="text"  class="staninput" id="password" name="password" style="width: 400px;" value="密码" onfocus="if(this.value==defaultValue) {this.value='';this.type='password'}" onblur="if(!value) {value=defaultValue; this.type='text';}" />
            </div>
            <div class="loginfo loginfo-last">
                <a href="#" ><?php L('find_password');?></a>
                &nbsp;或&nbsp;
                <a href="<?php echo U('Users/register'); ?>">注册</a>
                &nbsp;&nbsp;
                <input type="submit" class="blueBtn" value="登录">
            </div>
        </form>
    </div>
</div>
</div><!-- For div:wrap-inne -->
</div><!-- For div:wrap -->

<?php include T('views', 'Layout/footer'); ?>
</body>
</html>
