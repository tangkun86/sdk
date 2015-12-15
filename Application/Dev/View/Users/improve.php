<?php include T('Layout/header'); ?>
<?php include T('Layout/register_header'); ?>
        <div class="uiinfo cl">
            <p>北京建飞开发者平台致力于打造真实、合法、有效的品牌推广平台，我们有志与诚信守约、进取担当的第三方合作伙伴携手并进，建立和维护良性互动、健康有序的平台秩序。</p>
            <p>为了更好的保障您和广大移付通用户的利益，请您认真填写以下登记信息。</p>
            <br />
            <dl>
                <dt class="rcolor">用户信息登记后您可以：</dt>
                <dd>1. 使用移付通公众平台的所有功能。</dd>
                <dd>2. 提高帐号可信任度。</dd>
            </dl>
            <br />
            <p>请确认你的移付通开发者平台帐号属于企业或个人，并请按照对应的类别进行信息登记。</p>
        </div>
        <?php echo $error;?>
        <div class="uiinfo">
            <table class="devregtab">
                <tr>
                    <td class="regtableft">开发者类型</td>
                    <td class="regtabmid">
                        <ul class="operation-type">
                            <li class="<?php if($dev->type !=1){ echo 'tab-current'; } ?>">公司</li>
                            <li class="<?php if($dev->type ==1){ echo 'tab-current'; } ?>" style="border-left: 0;">个人</li>
                        </ul>
                    </td>
                    <td class="regtabright"></td>
                </tr>
            </table>
        </div>
        <div class="rcolor" style="padding: 10px;">
            <?php echo $error; ?>
        </div>
        <h1 style="height:0px; line-height:1px; margin:0;">&nbsp;</h1>
        <div class="uiinfo tab-child">
            <div class="tab-cont <?php if($dev->type ==1){ echo 'hide'; }  ?>">
                <form method="post" action="<?php echo U('Developers/improve'); ?>"  enctype="multipart/form-data">
                    <input  type="hidden" name="type" value="2">
                    <table class="devregtab" border="0" cellspacing="0" bordercolor="#cccccc" width="80%" style="border-collapse:collapse;">
                        <tr>
                            <td class="regtableft">企业名称</td>
                            <td class="regtabmid"><input type="text" class="staninput" style="width: 400px" name="company_name" value="<?php echo $dev->company_name ?>"></td>
                            <td class="regtabright"></td>
                        </tr>
                        <tr>
                            <td class="regtableft">企业地址</td>
                            <td class="regtabmid"><input type="text" class="staninput" style="width: 400px" name="company_address" value="<?php echo $dev->company_address ?>"></td>
                            <td class="regtabright"></td>
                        </tr>
                        <tr>
                            <td class="regtableft">营业执照注册号</td>
                            <td class="regtabmid"><input type="text" class="staninput" style="width: 400px" name="company_license" value="<?php echo $dev->company_license ?>"></td>
                            <td <td class="regtabright"></td>
                        </tr>
                        <tr>
                            <td class="regtableft">营业执照所在地</td>
                            <td class="regtabmid">
                                <select name="city" class="stanselect">
                                    <option>北京</option>
                                    <option selected="selected">成都</option>
                                    <option>广州</option>
                                    <option>上海</option>
                                    <option>深圳</option>
                                    <option>其它</option>
                                </select>
                            </td>
                            <td <td class="regtabright"></td>
                        </tr>
                        <tr>
                            <td class="regtableft">营业执照副本扫描件</td>
                            <td class="regtabmid">
                                <div class="business-license">
                                    <span><img src="<?php if($dev->company_image){ echo '/data/user/'.$dev->company_image;}else{ echo "/static/theme/simple/img/example.png";} ?>"></span>
                                        <span style="width:310px; padding-left:10px; font-size: 90%">
                                            ·请上传营业执照副本清晰彩色原件扫描件或数码照；<br/>
                                            ·在有效期内且年检章齐全（当年成立的可无年检章）；<br/>
                                            ·由国家的工商局或市场监督管理局颁发；<br/>
                                            ·支持.jpg .jpeg .bmp .gif格式照片，大小不超过5M。
                                        </span>
                                    <span style="width:400px;"><input name="company_image" type="file"></span>
                                </div>
                            </td>
                            <td class="regtabright"></td>
                        </tr>
                        <tr>
                            <td class="regtableft">联系人姓名 	</td>
                            <td class="regtabmid"><input  type="text" class="staninput" style="width: 400px" name="contact" value="<?php echo $dev->contact ?>"></td>
                            <td class="regtabright"></td>
                        </tr>
                        <tr>
                            <td class="regtableft">身份证号码</td>
                            <td class="regtabmid"><input  type="text" class="staninput" style="width: 400px" name="person_card" value="<?php echo $dev->person_card ?>"></td>
                            <td <td class="regtabright"></td>
                        </tr>
                        <tr>
                            <td class="regtableft">手机号码</td>
                            <td class="regtabmid"><input  type="text" class="staninput" style="width: 400px" name="mobile" value="<?php echo $dev->mobile ?>"></td>
                            <td <td class="regtabright"></td>
                        </tr>
                        <tr>
                            <td class="regtableft">联系人手持身份证照片</td>
                            <td class="regtabmid">
                                <div class="business-license">
                                    <span><img src="<?php if($dev->contact_image){ echo '/data/user/'.$dev->contact_image;}else{ echo "/static/theme/simple/img/example.png";} ?>"></span>
                                        <span style=" width:310px; padding-left:10px; font-size:90%;">
                                            ·身份证上的所有信息清晰可见，必须能看清证件号；<br/>
                                            ·照片需免冠，建议未化妆，手持证件人的五官清晰可见；<br/>
                                            ·照片内容真实有效，不得做任何修改；<br/>
                                            ·支持.jpg .jpeg .bmp .gif格式照片，大小不超过5M。
                                        </span>
                                    <span style="width:400px;"><input name="contact_image" type="file"></span>
                                </div>
                            </td>
                            <td class="regtabright"></td>
                        </tr>
                        <tr>
                            <td colspan="3"  style="text-align:center;">
                                <input type="submit" class="blueBtn" value="确认" >
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <!--Tab01 Show End-->
        <!--Tab02 Show Begin-->
<div class="uiinfo tab-child">
    <div class="tab-cont <?php if($dev->type !=1){ echo 'hide'; }  ?>">
        <form method="post" action="<?php echo U('Users/improve'); ?>"  enctype="multipart/form-data">
            <input  type="hidden" name="type" value="1">
            <table class="devregtab" border="0" cellspacing="0" bordercolor="#cccccc" width="80%" style="border-collapse:collapse;">
                <tr>
                    <td class="regtableft">联系人姓名 	</td>
                    <td class="regtabmid"><input  type="text" class="staninput" style="width: 400px" name="contact" value="<?php echo $dev->contact ?>"></td>
                    <td class="regtabright"></td>
                </tr>
                <tr>
                    <td class="regtableft">身份证号码</td>
                    <td class="regtabmid"><input  type="text" class="staninput" style="width: 400px" name="person_card" value="<?php echo $dev->person_card ?>"></td>
                    <td <td class="regtabright"></td>
                </tr>
                <tr>
                    <td class="regtableft">手机号码</td>
                    <td class="regtabmid"><input  type="text" class="staninput" style="width: 400px" name="mobile" value="<?php echo $dev->mobile ?>"></td>
                    <td <td class="regtabright"></td>
                </tr>
                <tr>
                    <td class="regtableft">所在城市</td>
                    <td class="regtabmid">
                        <select name="city" class="stanselect">
                            <option>北京</option>
                            <option selected="selected">成都</option>
                            <option>广州</option>
                            <option>上海</option>
                            <option>深圳</option>
                            <option>其它</option>
                        </select>
                    </td>
                    <td <td class="regtabright"></td>
                </tr>
                <tr>
                    <td class="regtableft">联系人手持身份证照片</td>
                    <td class="regtabmid">
                        <div class="business-license">
                            <span><img src="<?php if($dev->contact_image){ echo '/data/user/'.$dev->contact_image;}else{ echo "/static/theme/simple/img/example.png";} ?>"></span>
                                        <span style=" width:310px; padding-left:10px; font-size:90%;">
                                            ·身份证上的所有信息清晰可见，必须能看清证件号；<br/>
                                            ·照片需免冠，建议未化妆，手持证件人的五官清晰可见；<br/>
                                            ·照片内容真实有效，不得做任何修改；<br/>
                                            ·支持.jpg .jpeg .bmp .gif格式照片，大小不超过5M。
                                        </span>
                            <span style="width:400px;"><input name="contact_image" type="file"></span>
                        </div>
                    </td>
                    <td class="regtabright"></td>
                </tr>
                <tr>
                    <td colspan="3" style="text-align:center">
                        <input type="submit" class="blueBtn" value="确认">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>

        <div class="uiinfo uiinfo-last">
            <a href="<?php echo U('Users/loginDev'); ?>">返回登录页面</a>
        </div>
    </div>
</div>
</div><!-- For div:wrap-inne -->
</div><!-- For div:wrap -->

<?php include T('Layout/footer'); ?>
<script type="text/javascript" >
    $(function(){
        var $li =$(".operation-type li");
        $li.click(function(){
            $(this).addClass("tab-current")
                .siblings().removeClass("tab-current");
            var index =  $li.index(this);
            var tab = $("div.tab-child > div");
            tab.eq(index).show();
            tab.eq(1-index).hide();
        }).hover(function(){
            $(this).addClass("tab-hover");
        },function(){
            $(this).removeClass("tab-hover");
        })
    })
</script>
</body>
</html>
