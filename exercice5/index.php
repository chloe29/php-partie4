<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Exercice 5</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        // initialisation de 3 variables
        $nbr = 15;
        $texte1 = 'années avec toi.';
        // on crée la fonction exo() avec 2 paramètres
        function exo($a, $b){
            $result = $a . ' ' . $b;
            return $result;
        }
        // on affiche le retour de ma fonction
        echo exo($nbr, $texte1);
    ?>
</body>
</html>