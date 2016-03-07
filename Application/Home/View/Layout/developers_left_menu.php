<td valign="top">
    <div class="leftSide fL">
        <a href="<?php echo __MODULE__.'/Developers/index'; ?>" class="menuItem <?php if(CONTROLLER_NAME=='Developers')echo 'menuSelect';?>">开发者管理</a>
        <a href="<?php echo __MODULE__.'/Applications/index'; ?>" class="menuItem <?php if(CONTROLLER_NAME=='Applications')echo 'menuSelect';?>">计费应用管理</a>
        <a href="<?php echo __MODULE__.'/Iaps/index'; ?>" class="menuItem <?php if(CONTROLLER_NAME=='Iaps')echo 'menuSelect';?>">IAP管理</a>
        <a href="<?php echo __MODULE__.'/Statistics/index'; ?>" class="menuItem <?php if((CONTROLLER_NAME=='Statistics') && (ACTION_NAME=='index'))echo 'menuSelect';?>">开发者计费统计</a>
        <a href="<?php echo __MODULE__.'/Statistics/statApp'; ?>" class="menuItem <?php if((CONTROLLER_NAME=='Statistics') && (ACTION_NAME=='statApp'))echo 'menuSelect';?>">应用计费统计</a>
        <a href="<?php echo __MODULE__.'/Statistics/statIap'; ?>" class="menuItem <?php if(CONTROLLER_NAME=='Statistics' && (ACTION_NAME=='statIap'))echo 'menuSelect';?>">IAP计费统计</a>
        <a href="<?php echo __MODULE__.'/Statistics/statDetail'; ?>" class="menuItem <?php if(CONTROLLER_NAME=='Statistics' && (ACTION_NAME=='statDetail'))echo 'menuSelect';?>">订购明细查询</a>
        <!--<a href="<?php /*echo __MODULE__.'/ClientInfos/index'; */?>" class="menuItem <?php /*if(CONTROLLER_NAME=='ClientInfos')echo 'menuSelect';*/?>">客户端安装信息</a>-->
        <a href="<?php echo __MODULE__.'/Clients/index'; ?>" class="menuItem <?php if(CONTROLLER_NAME=='Clients' && (ACTION_NAME=='index'))echo 'menuSelect';?>">客户端安装信息</a>
        <a href="<?php echo __MODULE__.'/Clients/statistics'; ?>" class="menuItem <?php if(CONTROLLER_NAME=='Clients' && (ACTION_NAME=='statistics'))echo 'menuSelect';?>">数据统计</a>
    </div>
</td>