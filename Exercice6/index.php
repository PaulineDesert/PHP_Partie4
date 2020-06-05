<?php

    function showUser($name, $lastName, $number) {
        echo 'Bonjour ' . $name . chr(10) . $lastName . ', tu as ' . $number . chr(10) . 'ans.';
    }

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 6</title>
</head>

<body>

    <h1>Exercice 6</h1>
    <p>Faire une fonction qui prend trois paramètres : le nom, le prénom et l'âge d'une personne. Elle doit renvoyer une chaine de la forme :</p>
    <p>Bonjour + nom + prénom + , tu as + age + ans.</p>
    <p><?= showUser('Whatever', 'Nevermind', 32) ?></p>

</body>

</html>