<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1"/>
<title>管理员系统</title>
<link rel="stylesheet" href="<?php echo __ROOT__;?>/Public/css/admin.css"/>
</head>
<body class="bodyBg">
<div class="header"><span class="adminAccount fL"><strong>管理员系统</strong></span></div>
<div class="loginDiv">
  <form method="post" action="<?php echo __MODULE__.'/Users/loginAdmin'; ?>" class="adminIndexLogin">
    <div class="loginItem">
      <label>Name:</label>
      <input type="text" name="username" class="loginInput">
    </div>
    <div class="loginItem">
      <label>Password:</label>
      <input type="password" name="password" class="loginInput">
    </div>
    <div class="loginItem">
      <input type="submit" value="Submit" class="loginBtn">
    </div>
  </form>
</div>
</body>
</html>