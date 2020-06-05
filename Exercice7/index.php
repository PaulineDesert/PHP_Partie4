<?php

    function userIdentity($gender, $age) {
        
      if ($gender == 'Homme' && $age >= 18) {
        echo 'Vous êtes un homme et vous êtes majeur';
      } else if ($gender == 'Homme' && $age < 18) {
        echo 'Vous êtes un homme et vous êtes mineur';
      } else if ($gender == 'Femme' && $age >= 18) {
        echo 'Vous êtes une femme et vous êtes majeure';
      } else if ($gender == 'Femme' && $age <= 18) {
        echo 'Vous êtes une femme et vous êtes mineure';
      } else {
        echo 'Who are you ?';
      }
    }

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 7</title>
</head>

<body>

    <h1>Exercice 7</h1>
    <p>Faire une fonction qui prend deux paramètres : l'âge et le genre d'une personne. Le genre peut être :</p>
    <p>- Homme</p>
    <p>- Femme</p>
    <p>La fonction doit renvoyer en fonction des paramètres :</p>
    <p>- Vous êtes un homme et vous êtes majeur</p>
    <p>- Vous êtes un homme et vous êtes mineur</p>
    <p>- Vous êtes une femme et vous êtes majeure</p>
    <p>- Vous êtes une femme et vous êtes mineure</p>
    <p>Gérer tous les cas.</p>
    <p><?= userIdentity('Femme', 60) ?></p>

</body>

</html>