<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Exercice 3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        // initialisation de 2 variables
        $littleString = 'Je suis Charlie';
        $littleString2 = 'Et moi je suis La Manu';
        // on crée une fonction chaine() ayant 2 paramètres
        function chaine($string, $string2){
            // initialisation de la variable $result qui correspond à la concaténation des 2 paramètres de la fonction
            $result = $string . ' ' . $string2;
            // return termine l'exécution de la fonction
            return $result;
        }
        // on affiche le retour de ma fonction chaine()
        echo chaine($littleString, $littleString2);
    ?>
</body>
</html>