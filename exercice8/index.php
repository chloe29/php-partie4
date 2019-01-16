<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Exercice 8</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        // on initialise des variables
        $nbr_1 = 15;
        $nbr_2 = 10;
        $nbr_3 = 20;
        // on crée une fonction calcul() avec 3 paramètres
        function calcul($number_1, $number_2, $number_3){
            // on retourne la somme des 3 paramètres
            return $number_1 + $number_2 + $number_3;
        }
        // on affiche le retour de ma fonction
        echo calcul($nbr_1, $nbr_2, $nbr_3);
    ?>
</body>
</html>