<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Exercice 6</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        $nom = 'Dupont';
        $prenom = 'Jean';
        $age = 30;
        // on crée la fonction ensemble() avec 3 paramètres
        function ensemble($firstName, $lastName, $age1){
            $result = 'Bonjour ' . $firstName . ' ' . $lastName . ', tu as ' . $age1 . ' ans.';
            return $result;
        }
        // on affiche le retour de ma fonction
        echo ensemble($nom, $prenom, $age);
    ?>
</body>
</html>