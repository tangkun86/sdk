<?php include T('Layout/header');?>

<div id="main-body">
    <?php include T('Layout/left_menu');?>
    <div id="content">
        <div class="consoletitle">
            <h1>应用基本信息</h1>
        </div>
        <div class="consoleinfo"><?php $app = (object)$apps[0];?>
            <dl>
                <dd><strong>应用ID：</strong><?php echo $app->app_id ?></dd>
                <dd><strong>应用名：</strong><?php echo $app->name ?></dd>
                <dd><strong>应用密匙：</strong><?php echo $app->app_key ?></dd>
                <dd><strong>应用描述：</strong><?php echo $app->desc ?></dd>
            </dl>
        </div>

        <div class="consoletitle">
            <h1>计费点信息</h1>
        </div>

        <div class="consoleinfo">
            <p><?php #include Kohana::find_file('views', 'common/message'); ?></p>
        </div>

        <div class="consoleinfo">
            <form method="post" action="<?php echo U('Iaps/insert'); ?>">
                <table class="devregtab" border="0" cellspacing="0" bordercolor="#cccccc" width="80%" style="border-collapse:collapse;">
                    <tr>
                        <td class="regtableft">IAP名<span class="rcolor">*</span></td>
                        <td class="regtabmid">
                            <input name="application_id" type="text" value="<?php echo $app->id ?>" class="staninput" style="display:none;">
                            <input name="name" type="text" class="staninput">
                            <input name="user_id" type="hidden" value="<?php echo $app->user_id; ?>">
                            <span class="rcolor">12个汉字以内（24个字符）</span>
                        </td>
                        <td class="regtabright"></td>
                    </tr>
                    <tr>
                        <td class="regtableft">资费<span class="rcolor">*</span></td>
                        <td class="regtabmid">
                            <select name="pay_code" class="stanselect">
                                <?php foreach($fees as $fee){ ?>
                                    <option value="<?php echo $fee['pay_code'] ?>"> <?php echo $fee['description'] ?> </option>
                                <?php } ?>
                            </select>
                            <span class="rcolor">创建后不能修改</span>
                        </td>
                        <td class="regtabright"></td>
                    </tr>
                    <tr>
                        <td class="regtableft">触发计费说明<span class="rcolor">*</span></td>
                        <td class="regtabmid">
                            <textarea name="trigger_desc" class="ctextarea"></textarea>
                            <br />
                            <span class="rcolor">100个汉字以内（200个字符）</span>
                        </td>
                        <td <td class="regtabright"></td>
                    </tr>
                    <tr>
                        <td class="regtableft">计费点位置描述<span class="rcolor">*</span></td>
                        <td class="regtabmid">
                            <textarea name="position_desc" class="ctextarea"></textarea>
                            <br />
                            <span class="rcolor">100个汉字以内（200个字符）</span>
                        </td>
                        <td <td class="regtabright"></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align:center;">
                            <input  type="submit" class="blueBtn" value="确认">
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