<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Exercice 7</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        $age = rand(1,100);
        $genderArray = array("homme","femme");
        $gender = $genderArray[rand(0,1)];
        function personne($a,$b){
            // switch est une suite d'instructions if
            switch($a AND $b){
                case $a == "homme" AND $b >= 18:
                    return 'Vous êtes un homme et vous êtes majeur.';
                break;
                case $a == "homme" AND $b < 18:
                    return 'Vous êtes un homme et vous êtes mineur.';
                break;
                case $a == "femme" AND $b >= 18:
                    return 'Vous êtes une femme et vous êtes majeure.';
                break;
                case $a == "femme" AND $b < 18:
                    return 'Vous êtes une femme et vous êtes mineure.';
                break;
            }
        }
        // on affiche le retour de ma fonction
        echo personne($gender,$age);
    ?>
</body>
</html>