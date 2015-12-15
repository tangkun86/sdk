<?php include T('Layout/header');?>

<div id="main-body">
    <?php include T('Layout/left_menu');?>
    <div id="content">
        <div class="consoletitle">
            <h1>新增应用</h1>
        </div>
        <div class="consoleinfo">
            <p><?php #include Kohana::find_file('views', 'common/message'); ?></p>
        </div>
        <div class="consoleinfo">
            <form method="post" action="<?php echo U('Applications/insert'); ?>" >
                <table class="devregtab" border="0" cellspacing="0" bordercolor="#cccccc" width="80%" style="border-collapse:collapse;">
                    <tr>
                        <td class="regtableft" style="width:100px;">应用名</td>
                        <td class="regtabmid"><input  type="text" class="staninput" style="width: 400px;" maxlength="32" name="name"></td>
                        <td class="regtabright rcolor"></td>
                    </tr>
                    <tr>
                        <td class="regtableft">应用描述</td>
                        <td class="regtabmid"><textarea class="staninput" style="width: 400px; height:100px;" name="desc"></textarea></td>
                        <td class="regtabright"></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align:center;">
                            <input  type="hidden" name="user_id" value="<?php echo $_SESSION['user_id'];?>">
                            <input  type="submit" class="blueBtn" value="确认">
                            <input type="button" value="取消" onclick="history.back()" class="grayBtn">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div><!-- end #main-body -->
</div><!-- For div:wrap-inne -->
</div><!-- For div:wrap -->

<?php include T('Layout/footer'); ?>
</body>
</html>