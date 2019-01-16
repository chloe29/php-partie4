<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Exercice 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        // Initialisation de la variable
        $littleString = 'Je suis Oscar';
        // création de la fonction returnString() avec un paramètre
        function returnString($test){
            // on retourne le paramètre
            return $test;
        }
        // on affiche le retour de ma fonction returnString()
        echo returnString($littleString);

        // autre méthode :

        // function returnString($littleString){
        //     return $littleString;
        // }
        // echo returnString('Je suis Oscar');
    ?>
</body>
</html>