<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../../uploads/pokemon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="styles/ihover.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="btn.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Episode 41 </title>
</head>
<body>
    <div class="navbar">
        <a href="../../index">Home</a>
        <a href="#news">News</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>
    </div>
    <div class="progress-container">
        <div class="progress-bar"></div>
    </div>
    <div class="modal-container">
        <div class="modal-exemple p-5">
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

    <button class="botn" id="#goodday">Cliquez ici</button>
    <button class="botn"><i class="fas fa-thumbs-up"></i> Like</button>
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
    <hr>
    <div class="container">
        <div class="row m-5 gap-3">            
            <h2 class="">Boutons</h2>
            <button class="col-md" type="button">Bouton par défaut</button>
            <button class="col-md btn btn-primary" type="button">Bouton bleu (bootstrap style)</button>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="row m-5">
            <h2 class="heading">Couleur du bouton</h2>
            <div class="col-md">
                <button type="button" class="button vert">Vert</button>
            </div>
            <div class="col-md">
                <button type="button" class="button bleu">Bleu</button>
            </div>
            <div class="col-md">
                <button type="button" class="button rouge">Rouge</button>
            </div>
            <div class="col-md">
                <button type="button" class="button gris">Gris</button>
            </div>
            <div class="col-md">
                <button type="button" class="button noir">Noir</button>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="row m-5">
            <h2 class="heading">Taille de la police du bouton</h2>
            <div class="col-md">
                <button type="button" class="button vert small">10px</button>
            </div>
            <div class="col-md">
                <button type="button" class="button bleu medium">12px</button>
            </div>
            <div class="col-md">
                <button type="button" class="button rouge large">16px</button>
            </div>
            <div class="col-md">
                <button type="button" class="button gris xlarge">20px</button>
            </div>
            <div class="col-md">
                <button type="button" class="button noir xxlarge">24px</button>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="row m-5">
            <h2 class="heading">Remplissage du bouton</h2>
            <div class="col-md">
                <button type="button" class="button vert small p-1">10px 24px</button>
            </div>
            <div class="col-md">
                <button type="button" class="button bleu medium p-2">12px 28px</button>
            </div>
            <div class="col-md">
                <button type="button" class="button rouge large p-3">14px 40px</button>
            </div>
            <div class="col-md">
                <button type="button" class="button gris xlarge p-4">32px 16px</button>
            </div>
            <div class="col-md">
                <button type="button" class="button noir xxlarge p-5">16px</button>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="row m-5">
            <h2 class="heading">Coins du bouton</h2>
            <div class="col-md">
                <button type="button" class="button vert small rounded-1">2px</button>
            </div>
            <div class="col-md">
                <button type="button" class="button bleu medium rounded-2">4px</button>
            </div>
            <div class="col-md">
                <button type="button" class="button rouge large rounded-3">8px</button>
            </div>
            <div class="col-md">
                <button type="button" class="button gris xlarge rounded-4">12px</button>
            </div>
            <div class="col-md">
                <button type="button" class="button noir xxlarge rounded-circle p-3">50%</button>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="row m-5">
            <h2 class="heading">Bordures du bouton</h2>
            <div class="col-md">
                <button type="button" class="btn border border-success border-2 p-5">Solide</button>
            </div>
            <div class="col-md">
                <button type="button" class="btn border border-primary border-2 p-5  border-dashed">En tirets</button>
            </div>
            <div class="col-md">
                <button type="button" class="btn border border-danger border-2 p-5 border-dotted">Pointillée</button>
            </div>
            <div class="col-md">
                <button type="button" class="btn border border-secondary border-2 p-5 border-double">Double</button>
            </div>
            <div class="col-md">
                <button type="button" class="btn border border-dark border-2 p-5 border-groove">Relief</button>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="row m-5">
            <h2 class="heading">Survol du bouton</h2>
            <div class="col-md">
                <button type="button" class="btn border border-success border-2 p-5 hvr-1">Vert</button>
            </div>
            <div class="col-md">
                <button type="button" class="btn border border-primary border-2 p-5 hvr-2">Bleu</button>
            </div>
            <div class="col-md">
                <button type="button" class="btn border border-danger border-2 p-5 hvr-3">Rouge</button>
            </div>
            <div class="col-md">
                <button type="button" class="btn border border-secondary border-2 p-5 hvr-4">Orange</button>
            </div>
            <div class="col-md">
                <button type="button" class="btn border border-dark border-2 p-5 hvr-5">Noir</button>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="row m-5">
            <h2 class="">Effet d'ombre</h2>
            <div class="col-md">
                <button type="button" class="btn btn-success shadow-1">Ombre</button>
            </div>
             <div class="col-md">
                <button type="button" class="btn btn-success hvr-shadow">Ombre au survol</button>
            </div>
        </div>
    </div>
     <hr>
    <div class="container">
        <div class="row m-5">
            <h2 class="">Effet désactivé</h2>
            <div class="col-md">
                <button type="button" class="btn btn-success shadow-1 disabled-2">Ombre</button>
            </div>            
        </div>
    </div>
     <hr>
    <div class="container">
        <div class="row m-5">
            <h2>Largeur du bouton</h2>
            <div class="">
                <button type="button" class="w-25 mb-3 btn border border-success border-2 p-5 hvr-1">25%</button>
            </div>
            <div class="">
                <button type="button" class="w-50 mb-3 btn border border-primary border-2 p-5 hvr-2">50%</button>
            </div>
            <div class="">
                <button type="button" class="w-75 mb-3 btn border border-danger border-2 p-5 hvr-3">75%</button>
            </div>
            <div class="">
                <button type="button" class="w-100 mb-3 btn border border-secondary border-2 p-5 hvr-4">100%</button>
            </div>           
        </div>
    </div>
    <script src="script.js"></script>
    <footer class="bg-dark p-5 text-center mt-5">
        <p class="text-white m-5">&copy; 2024 Pokemon Project. All rights reserved.</p>
    </footer>
</body>
</html>