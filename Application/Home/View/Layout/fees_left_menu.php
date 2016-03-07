<td valign="top">
    <div class="leftSide fL">
        <a href="<?php echo __MODULE__.'/Fees/manage'; ?>" class="menuItem <?php if(CONTROLLER_NAME=='Fees')echo 'menuSelect';?>">计费点管理</a>
        <a href="<?php echo __MODULE__.'/PayCode/manage'; ?>" class="menuItem <?php if(CONTROLLER_NAME=='PayCode')echo 'menuSelect';?>">计费代码管理</a>
        <a href="<?php echo __MODULE__.'/Telcos/manage'; ?>" class="menuItem <?php if(CONTROLLER_NAME=='Telcos')echo 'menuSelect';?>">运营商渠道管理</a>
        <a href="<?php echo __MODULE__.'/Mncs/manage'; ?>" class="menuItem <?php if(CONTROLLER_NAME=='Mncs')echo 'menuSelect';?>">移动网络代码管理</a>
    </div>
</td>