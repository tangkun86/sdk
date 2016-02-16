<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>debug</title>
</head>
<body>
    <form action="" method="post">
        <label>加密字符串：<input type="text" name="str" value=""></label>
        <input type="submit" value="提交">
    </form>
    <blockquote style="padding: 5px 5px;max-width: 100%;overflow:auto">
        <?php if(isset($msg)){
            echo '你输入的是：'.$msg['str']."<br>";
            echo '解密结果为：';
            var_dump($msg['dec']);
        }
        ?>
    </blockquote>
</body>
</html>