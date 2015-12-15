<div id="sidebar">
    <div>
        <a href="<?php echo U('Index/index'); ?>" class="menuItem <?php if(CONTROLLER_NAME=='Index' && ACTION_NAME=='index'){echo 'menuSelect'; }?>"><?php echo '开发者信息' ?></a>
        <a href="<?php echo U('Applications/index'); ?>" class="menuItem <?php if(CONTROLLER_NAME=='Applications' && ACTION_NAME=='index'){echo 'menuSelect'; }?>"><?php echo '应用管理' ?></a>
        <a href="<?php echo U('Iaps/index'); ?>" class="menuItem <?php if(CONTROLLER_NAME=='Iaps'){echo 'menuSelect'; }?>"><?php echo '应用内购管理' ?></a>
        <a href="<?php echo U('Statistics/index'); ?>" class="menuItem <?php if(CONTROLLER_NAME=='Statistics' && ACTION_NAME=='index'){echo 'menuSelect'; }?>"><?php echo '应用收入统计' ?></a>
        <a href="<?php echo U('Statistics/statIap'); ?>" class="menuItem <?php if(CONTROLLER_NAME=='Statistics' && ACTION_NAME=='statIap'){echo 'menuSelect'; }?>"><?php echo '内购收入统计' ?></a>
        <a href="<?php echo U('Statistics/statDetail'); ?>" class="menuItem <?php if(CONTROLLER_NAME=='Statistics' && ACTION_NAME=='statDetail'){echo 'menuSelect'; }?>"><?php echo '计费明细' ?></a>
    </div>
</div>