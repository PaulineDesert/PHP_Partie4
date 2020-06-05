<?php

    function trueFunction() {
        $age = 19;

        if ($age >= 18) {
            return true;
        } else {
            return false;
        }

    }

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1</title>
</head>
<body>
    <h1>Exercice 1</h1>
    <p>Faire une fonction qui retourne true.</p>
    <p><?= trueFunction() ?></p>
    
</body>
</html>