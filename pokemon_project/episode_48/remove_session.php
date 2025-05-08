<?php
session_start(); // Start the session
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réinitialiser et détriuire la session</title>
</head>
<body>
    <?php
        session_unset(); // Unset all session variables
        print_r($_SESSION); // Print session variables after unsetting
        echo "La varible de session", " est supprimée.<br>";
        session_destroy(); // Destroy the session
        echo "La variable de session est détruite et n'enregistre plus les données.<br>";
    ?>
</body>
</html>