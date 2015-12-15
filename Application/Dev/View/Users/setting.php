<?php include T('Layout/header'); ?>

<div id="devuserconfig">
    <div class="ucwrap">
        <h1><?php echo L('ifpay_dev_user_config_title_1') ?></h1>
        <?php
            echo '<div class="rcolor" style="padding: 10px;">';
            echo $error;
            echo '</div>';
        ?>

    </div>
    <div class="uiinfo">
        <table class="devregtab" border="0" cellspacing="0" bordercolor="#cccccc" width="80%" style="border-collapse:collapse;">
            <form method="post" action="<?php echo U('Users/setting'); ?>" >
                <tr>
                    <td class="regtableft"><?php echo L('ifpay_dev_oldpassword') ?></td>
                    <td class="regtabmid"><input type="password" class="staninput" style="width: 400px" name="old_password"></td>
                    <td class="regtabright"></td>
                </tr>
                <tr>
                    <td class="regtableft"><?php echo L('ifpay_dev_newpassword') ?></td>
                    <td class="regtabmid"><input type="password" class="staninput" style="width: 400px" name="password"></td>
                    <td class="regtabright"></td>
                </tr>
                <tr>
                    <td class="regtableft"><?php echo L('ifpay_dev_repassword') ?></td>
                    <td class="regtabmid"><input type="password" class="staninput" style="width: 400px" name="repassword"></td>
                    <td class="regtabright"></td>
                </tr>
                <tr>
                    <td colspan="3"  style="text-align:center;">
                        <input type="hidden" name="type" value="password">
                        <input type="submit" class="blueBtn" value="<?php echo L('ifpay_dev_submit') ?>" >
                        <input type="button" class="grayBtn" value="<?php echo L('ifpay_dev_back') ?>" onclick="window.location='<?php echo U('Index/index'); ?>'">
                    </td>
                </tr>
            </form>
        </table>
    </div>
    <div style="display:none; background-color: #ccc; line-height:30px; margin:20px 0;">&nbsp;</div>
    <h1 style="text-align:center;display:none;"><?php echo L('ifpay_dev_user_config_title_2') ?></h1>
    <p style="color:red; margin:10px; text-align:center;display:none;"><?php echo L('ifpay_dev_user_config_p1') ?></p>
    <p style="margin:10px; text-align:center;display:none;"><input type="button" value="<?php echo L('ifpay_dev_modify_confirm') ?>" onClick="modify();" class="blueBtn"></p>
    <?php
        echo '<div style="display:none"  class="rcolor" style="padding: 10px;text-align:center;">';
        echo $error;
        echo '</div>';
    ?>
    <div class="uiinfo uiinfo-last">
        <table style="display:none" id="setField"  class="devregtab" border="0" cellspacing="0" bordercolor="#cccccc" width="80%" style="border-collapse:collapse;">
            <form method="post" action="<?php echo U('dev/setting?type=2'); ?>" enctype="multipart/form-data">
                <?php if($dev->type == 1){?>
                    <tr>
                        <td class="regtableft"><?php echo L('ifpay_dev_contact') ?></td>
                        <td class="regtabmid"><input type="text" class="staninput" style="width: 400px" name="contact" value="<?php echo $dev->contact ?>" disabled></td>
                        <td class="regtabright"></td>
                    </tr>
                    <tr>
                        <td class="regtableft"><?php echo L('ifpay_dev_person_card') ?></td>
                        <td class="regtabmid"><input type="text" class="staninput" style="width: 400px" name="person_card" value="<?php echo $dev->person_card ?>" disabled></td>
                        <td class="regtabright"></td>
                    </tr>
                    <tr>
                        <td class="regtableft"><?php echo L('ifpay_dev_mobile') ?></td>
                        <td class="regtabmid"><input type="text" class="staninput" style="width: 400px" name="mobile" value="<?php echo $dev->mobile ?>" disabled></td>
                        <td class="regtabright"></td>
                    </tr>
                    <tr>
                        <td class="regtableft"><?php echo L('ifpay_dev_person_city') ?></td>
                        <td class="regtabmid"><input type="text" class="staninput" style="width: 400px" name="city" value="<?php echo $dev->city ?>" disabled></td>
                        <td class="regtabright"></td>
                    </tr>
                    <tr>
                        <td class="regtableft"><?php echo L('ifpay_dev_contact_image') ?></td>
                        <td class="regtabmid">
                            <div class="business-license">
                                <span><img src="<?php if($dev->contact_image){ echo '/data/user/'.$dev->contact_image;}else{ echo "/static/theme/simple/img/example.png";} ?>"></span>
                                    <span style=" width:310px; padding-left:10px; font-size: 90%">
                                    <?php echo L('ifpay_dev_contact_image1') ?><br/>
                                        <?php echo L('ifpay_dev_contact_image2') ?><br/>
                                        <?php echo L('ifpay_dev_contact_image3') ?><br/>
                                        <?php echo L('ifpay_dev_contact_image4') ?>
                                    </span>
                                <span style="width:400px;"><input name="contact_image" type="file" disabled></span>
                            </div>
                        </td>
                        <td class="regtabright"></td>
                    </tr>
                    <tr>
                        <td colspan="3"><input name="type" type="hidden" value="1"></td>
                    </tr>
                <?php }else { ?>
                    <tr>
                        <td class="regtableft"><?php echo L('ifpay_dev_company_name') ?></td>
                        <td class="regtabmid"><input type="text" class="staninput" style="width: 400px" name="company_name" value="<?php echo $dev->company_name ?>" disabled></td>
                        <td class="regtabright"></td>
                    </tr>
                    <tr>
                        <td class="regtableft"><?php echo L('ifpay_dev_company_address') ?></td>
                        <td class="regtabmid"><input type="text" class="staninput" style="width: 400px" name="company_address" value="<?php echo $dev->company_address ?>" disabled></td>
                        <td class="regtabright"></td>
                    </tr>
                    <tr>
                        <td class="regtableft"><?php echo L('ifpay_dev_company_license') ?></td>
                        <td class="regtabmid"><input type="text" class="staninput" style="width: 400px" name="company_license" value="<?php echo $dev->company_license ?>" disabled></td>
                        <td class="regtabright"></td>
                    </tr>
                    <tr>
                        <td class="regtableft"><?php echo L('ifpay_dev_city') ?></td>
                        <td class="regtabmid"><input type="text" class="staninput" style="width: 400px" name="city" value="<?php echo $dev->city ?>" disabled></td>
                        <td class="regtabright"></td>
                    </tr>
                    <tr>
                        <td class="regtableft"><?php echo L('ifpay_dev_company_image') ?></td>
                        <td class="regtabmid">
                            <div class="business-license">
                                <span><img src="<?php if($dev->company_image){ echo '/data/user/'.$dev->company_image;}else{ echo "/static/theme/simple/img/example.png";} ?>"></span>
									<span style="width:310px; padding-left:10px; font-size: 90%">
									<?php echo L('ifpay_dev_company_image1') ?><br/>
                                        <?php echo L('ifpay_dev_company_image2') ?><br/>
                                        <?php echo L('ifpay_dev_company_image3') ?><br/>
                                        <?php echo L('ifpay_dev_company_image4') ?>
									</span>
                                <span style="width:400px;"><input name="company_image" type="file" disabled></span>
                            </div>
                        </td>
                        <td class="regtabright"></td>
                    </tr>
                    <tr>
                        <td class="regtableft"><?php echo L('ifpay_dev_contact') ?></td>
                        <td class="regtabmid"><input type="text" class="staninput" style="width: 400px" name="contact" value="<?php echo $dev->contact ?>" disabled></td>
                        <td class="regtabright"></td>
                    </tr>
                    <tr>
                        <td class="regtableft"><?php echo L('ifpay_dev_contact_person_card') ?></td>
                        <td class="regtabmid"><input type="text" class="staninput" style="width: 400px" name="person_card" value="<?php echo $dev->person_card ?>" disabled></td>
                        <td class="regtabright"></td>
                    </tr>
                    <tr>
                        <td class="regtableft"><?php echo L('ifpay_dev_contact_mobile') ?></td>
                        <td class="regtabmid"><input type="text" class="staninput" style="width: 400px" name="mobile" value="<?php echo $dev->mobile ?>" disabled></td>
                        <td class="regtabright"></td>
                    </tr>
                    <tr>
                        <td class="regtableft"><?php echo L('ifpay_dev_contact_image') ?></td>
                        <td class="regtabmid">
                            <div class="business-license">
                                <span><img src="<?php if($dev->contact_image){ echo '/data/user/'.$dev->contact_image;}else{ echo "/static/theme/simple/img/example.png";} ?>"></span>
									<span style=" width:310px; padding-left:10px; font-size:90%; float:left;">
                                    <?php echo L('ifpay_dev_contact_image1') ?><br/>
                                        <?php echo L('ifpay_dev_contact_image2') ?><br/>
                                        <?php echo L('ifpay_dev_contact_image3') ?><br/>
                                        <?php echo L('ifpay_dev_contact_image4') ?>
                                    </span>
                                <span style="width:400px;"><input name="contact_image" type="file" disabled></span>
                            </div>                            </td>
                        <td class="regtabright"></td>
                    </tr>
                    <tr>
                        <td colspan="3"><input name="type" type="hidden" value="2"></td>
                    </tr>
                <?php } ?>
                <tr>
                    <td colspan="3"  style="text-align:center;">
                        <input type="submit" class="blueBtn" value="<?php echo L('ifpay_dev_submit') ?>" disabled>
                        <input type="button" class="grayBtn" value="<?php echo L('ifpay_dev_back') ?>" onclick="window.location='<?php echo U('dev/index'); ?>'">
                    </td>
                </tr>
            </form>
        </table>
    </div>
</div>
</div>
</div><!-- For div:wrap-inne -->
</div><!-- For div:wrap -->

<?php include T('views', 'Layout/footer'); ?>
<script type="text/javascript" >
    $(function(){
        var $li =$(".tab-topic li");
        $li.click(function(){
            $(this).addClass("tab-current")
                .siblings().removeClass("tab-current");
            var index =  $li.index(this);
            $("div.tab-child > div")
                .eq(index).show()
                .siblings().hide();
        }).hover(function(){
            $(this).addClass("tab-hover");
        },function(){
            $(this).removeClass("tab-hover");
        })
    })

    function modify(){
        $("#setField input").removeAttr("disabled");
    }
</script>
</body>
</html>