<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $_SESSION['favcolor'] = 'blue';
        $_SESSION['favanimal'] = 'cat';
        echo 'Session variables are set.<br>';

print_r ($_SESSION);
    ?>
</body>
</html>