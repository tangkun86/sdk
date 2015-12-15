<?php include T('Layout/header'); ?>
<?php include T('Layout/register_header'); ?>
        <p class="rcolor">您的信息已提交，请等待审核。审核通过后您会收到邮件通知，通常为1~2个工作日内。</p>
        <div class="uiwinfo uiwinfo-last">
            <table class="devregtab" border="0" cellspacing="0" bordercolor="#cccccc" width="80%" style="border-collapse:collapse;">
                <?php if($dev->type == 1){?>
                    <tr>
                        <td class="regtableft">联系人姓名</td>
                        <td class="regtabmid">
                            <input type="text" class="staninput" style="width: 400px" name="contact" value="<?php echo $dev->contact ?>" disabled>
                        </td>
                        <td class="regtabright"></td>
                    </tr>
                    <tr>
                        <td class="regtableft">身份证号码</td>
                        <td class="regtabmid">
                            <input type="text" class="staninput" style="width: 400px" name="person_card" value="<?php echo $dev->person_card ?>" disabled>
                        </td>
                        <td class="regtabright"></td>
                    </tr>
                    <tr>
                        <td class="regtableft">手机号码</td>
                        <td class="regtabmid">
                            <input type="text" class="staninput" style="width: 400px" name="mobile" value="<?php echo $dev->mobile ?>" disabled>
                        </td>
                        <td class="regtabright"></td>
                    </tr>
                    <tr>
                        <td class="regtableft">城市</td>
                        <td class="regtabmid">
                            <input type="text" class="staninput" style="width: 400px" name="city" value="<?php echo $dev->city ?>" disabled>
                            <input name="type" type="hidden" value="1">
                        </td>
                        <td class="regtabright"></td>
                    </tr>
                    <tr>
                        <td class="regtableft">联系人手持身份证照片</td>
                        <td class="regtabmid">
                            <div class="business-license">
                                	<span>
									<?php if($dev->contact_image){  ?>
                                        <img src="<?php echo '/Uploads/'.$dev->contact_image; ?>">
                                    <?php } ?>
									</span>
                            </div>
                        </td>
                        <td class="regtabright"></td>
                    </tr>
                <?php }else { ?>
                    <tr>
                        <td class="regtableft">企业名称</td>
                        <td class="regtabmid">
                            <input type="text" class="staninput" style="width: 400px" name="company_name" value="<?php echo $dev->company_name ?>" disabled>
                        </td>
                        <td class="regtabright"></td>
                    </tr>
                    <tr>
                        <td class="regtableft">企业地址</td>
                        <td class="regtabmid">
                            <input type="text" class="staninput" style="width: 400px" name="company_address" value="<?php echo $dev->company_address ?>" disabled>
                        </td>
                        <td class="regtabright"></td>
                    </tr>
                    <tr>
                        <td class="regtableft">营业执照注册号</td>
                        <td class="regtabmid">
                            <input type="text" class="staninput" style="width: 400px" name="company_license" value="<?php echo $dev->company_license ?>" disabled>
                        </td>
                        <td class="regtabright"></td>
                    </tr>
                    <tr>
                        <td class="regtableft">营业执照所在地</td>
                        <td class="regtabmid">
                            <input type="text" class="staninput" style="width: 400px" name="city" value="<?php echo $dev->city ?>" disabled>
                        </td>
                        <td class="regtabright"></td>
                    </tr>
                    <tr>
                        <td class="regtableft">营业执照副本扫描件</td>
                        <td class="regtabmid">
                            <div class="business-license">
                                	<span>
									<?php if($dev->company_image){ ?>
                                        <img src="<?php echo '/Uploads/'.$dev->company_image; ?>">
                                    <?php } ?>
                                    </span>
                            </div>
                        </td>
                        <td class="regtabright"></td>
                    </tr>
                    <tr>
                        <td class="regtableft">联系人姓名</td>
                        <td class="regtabmid">
                            <input type="text" class="staninput" style="width: 400px" name="contact" value="<?php echo $dev->contact ?>" disabled>
                        </td>
                        <td class="regtabright"></td>
                    </tr>
                    <tr>
                        <td class="regtableft">身份证号码</td>
                        <td class="regtabmid">
                            <input type="text" class="staninput" style="width: 400px" name="person_card" value="<?php echo $dev->person_card ?>" disabled>
                        </td>
                        <td class="regtabright"></td>
                    </tr>
                    <tr>
                        <td class="regtableft">手机号码</td>
                        <td class="regtabmid">
                            <input type="text" class="staninput" style="width: 400px" name="mobile" value="<?php echo $dev->mobile ?>" disabled>
                        </td>
                        <td class="regtabright"></td>
                    </tr>
                    <tr>
                        <td class="regtableft">联系人手持身份证照片</td>
                        <td class="regtabmid">
                            <div class="business-license">
                                	<span>
									<?php if($dev->contact_image){  ?>
                                        <img src="<?php echo '/Uploads/'.$dev->contact_image; ?>">
                                    <?php } ?>
                                	</span>
                            </div>
                        </td>
                        <td class="regtabright"></td>
                    </tr>
                    <tr>
                        <td colspan="3" style="text-align:center">
                            <input type="button" class="blueBtn" value="重新编辑" onclick="window.location='<?php echo U('Users/improve'); ?>'">
                            <input type="button" class="grayBtn" value="返回登录页面" onclick="window.location='<?php echo U('Users/logout'); ?>'" >
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>
</div><!-- For div:wrap-inne -->
</div><!-- For div:wrap -->

<?php include T('Layout/footer'); ?>
</body>
</html>