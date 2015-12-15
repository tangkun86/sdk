<div id="devreg">
    <div class="regwrap">
        <h1>开发者注册流程</h1>
        <ul class="workflow">
            <li <?php if(ACTION_NAME=='register'){echo 'class="current"';} ?>>帐号注册</li>
            <li <?php if(ACTION_NAME=='improve'){echo 'class="current"';} ?>>信息登记</li>
            <li <?php if(ACTION_NAME=='wait'){echo 'class="current"';} ?>>等候审核</li>
            <li>完成注册</li>
            <li>&nbsp;</li>
        </ul>