<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Exercice 4</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        // initialisation de 2 variables
        $nbr_1 = 5;
        $nbr_2 = 8;
        // on crée une fonction returnNbr() avec 2 paramètres
        function returnNbr($a, $b){
            // switch est une série d'instructions if
            // condition entre paranthèses
            switch (true){
                case $a > $b:
                    return 'Le premier nombre est plus grand';
                break;
                case $a < $b:
                    return 'Le premier nombre est plus petit';
                break;
                case $a == $b:
                    return 'Les deux nombres sont identiques';
                break;
                default:
                    return 'Oops il y a une erreur';
                break;
            } 
        }
        // on affiche le retour de ma fonction returnNbr()
        echo returnNbr($nbr_1, $nbr_2);
    ?>
</body>
</html>