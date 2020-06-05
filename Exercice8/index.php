<?php

    function myFunction($firstNumber = 1, $secondNumber = 1, $thirdNumber = 1) {
      return $firstNumber + $secondNumber + $thirdNumber;
        
    }

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 8</title>
</head>

<body>

    <h1>Exercice 8</h1>
    <p>Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.</p>
    <p>Tous les paramètres doivent avoir une valeur par défaut.</p>
    <p><?= myFunction(2, 8, 29) ?></p>

</body>

</html>