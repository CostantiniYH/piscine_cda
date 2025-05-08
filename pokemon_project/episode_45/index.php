<?php

echo "<h1>Welcome to the Pokemon Project</h1>";

echo ("Bonjour tout le monde !<br>");

echo "<h1>Je commence cette phrase avec une première commande echo<br>";

echo "Et je la termine avec une deuxième commande echo, tout en l'englobant dans une seule balise html, en l'occurence la balise titre. </h1><br>";

echo "Cette ", "phrase ", "est ", "écrite ", "en ", "php ", "et ", "elle ", "est ", "séparée ", "par ", "des ", "virgules.<br>";

$txt1 = "PHP";
$txt2 = "HTML";
$txt3 = "<a href='https://www.w3schools.com'>W3Schools.com</a>";

echo '<h2>' . $txt1 . '</h2>';
echo '<h2>' . $txt2 . '</h2>';
echo 'Apprends à coder en ' . $txt1 . ' et  ' . $txt2 .' sur ' . $txt3 . '.<br>';
?>

<?php
print "Bonjour !<br>";

print ("Nous pouvons aussi utiliser les parenthèses.<br>");

print "<h2>Balisage HTML accépter par la commande 'print'.</h2>";
?>