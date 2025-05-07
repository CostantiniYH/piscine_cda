<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Episode 41 </title>
</head>
<body>
    <div class="navbar">
        <a href="#home">Home</a>
        <a href="#news">News</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>
    </div>
    <div class="progress-container">
        <div class="progress-bar"></div>
    </div>
    <div class="modal-container">
        <div class="modal-exemple">
            <h2>Modal Example</h2>
            <button id="myBtn" class="btnscript">Open Modal</button>
        </div>
        <div id="myModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <p>Some text in the Modal..</p>
            </div>
        </div>
    </div>

    <button class="btn">Cliquez ici</button>
    <button class="btn"><i class="fas fa-thumbs-up"></i> Like</button>
    <?php
    $hour = date("H");
    if ($hour < 12) {
        echo "Good morning!";
    } elseif ($hour < 18) {
        echo "Good afternoon!";
    } else {
        echo "Good evening!";
    }
    ?>
    <script src="script.js"></script>
</body>
</html>