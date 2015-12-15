<?php
/**
 * Created by PhpStorm.
 * User: tk
 * Date: 2015/10/10
 * Time: 10:30
 */
$msg = !empty($message) ? $message : $error;

//echo $msg;
?>

<script>
    alert("<?php echo $msg ?>");
    history.back(-1);
</script>
