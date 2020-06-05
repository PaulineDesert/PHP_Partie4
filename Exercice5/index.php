<?php

    function showUser($name, $number) {
        echo $name . chr(10) . $number;
    }

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5</title>
</head>

<body>

    <h1>Exercice 5</h1>
    <p>Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit la concaténation de ces deux paramètres.</p>
    <p><?= showUser('Whatever', 25) ?></p>

</body>

</html>