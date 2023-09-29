<?php
$cookie_name="user";
$cookie_value="prasad";
//create cookie

setcookie($cookie_name,$cookie_value,time()+(86000*23),"/");


?>
<html>
    <body>
        <?php
        echo $_COOKIE[$cookie_name];
        ?>
    </body>
</html>