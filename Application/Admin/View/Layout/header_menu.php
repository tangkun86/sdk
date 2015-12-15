<tr class="header">
    <td><div ><span class="adminAccount fL"><strong>管理员平台</strong> <a href="<?php echo __MODULE__.'/Admin/logout' ?>" class="fR">Logout</a></span></div></td>
    <td><div class="navTab">
            <?php $controller = CONTROLLER_NAME; ?>
            <a href=<?php echo U('Admin/index'); if($controller == 'Admin'){ echo " class=\"selected\""; }  ?>>首页</a>
            <!--        <a href="adminglobal.html">全局</a>-->
            <!--<a href=<?php /*echo U('Users/index');  if($controller == 'Users'){ echo " class=\"selected\""; } */?> >用户</a>-->
            <a href=<?php echo U('Developers/index');  if($controller == 'Developers'){ echo " class=\"selected\""; } ?> >开发者</a>
            <a href=<?php echo U('Fees/index');  if($controller == 'Fees'){ echo " class=\"selected\""; } ?> >计费点管理</a>
            <!--        <a href="adminapp.html">应用</a>-->
        </div></td>
</tr>