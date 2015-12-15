<?php include T('Layout/header'); ?>
<?php include T('Layout/register_header'); ?>
        <div class="loginfo rcolor"><?php echo $error; ?></div>
        <div class="reginfo cl" >
            <form method="post" action="<?php echo U('Users/register'); ?>" >
                <table class="devregtab" border="0" cellspacing="0" bordercolor="#cccccc" width="80%" style="border-collapse:collapse;">
                    <tr>
                        <td class="regtableft">用户名</td>
                        <td class="regtabmid"><input  type="text" class="staninput" style="width: 400px" name="username"></td>
                        <td class="regtabright"></td>
                    </tr>
                    <tr>
                        <td class="regtableft">电子邮箱</td>
                        <td class="regtabmid"><input  type="text" class="staninput" style="width: 400px" name="email"></td>
                        <td class="regtabright"></td>
                    </tr>
                    <tr>
                        <td class="regtableft">密码</td>
                        <td class="regtabmid"><input  type="password" class="staninput" style="width: 400px" name="password"></td>
                        <td <td class="regtabright"></td>
                    </tr>
                    <tr>
                        <td class="regtableft">重复密码</td>
                        <td class="regtabmid"><input  type="password" class="staninput" style="width: 400px" name="repassword"></td>
                        <td class="regtabright"></td>
                    </tr>
                    <tr>
                        <td colspan="3" style="text-align:center">
                            <input  type="submit" class="blueBtn" value="确认">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="reginfo reginfo-last">
            <a href="<?php echo U('Users/loginDev'); ?>">返回登录页面</a>
        </div>
        </form>
    </div>
</div>
</div><!-- For div:wrap-inne -->
</div><!-- For div:wrap -->

<?php include T('Layout/footer'); ?>
</body>
</html>