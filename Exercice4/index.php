<?php

    function numbers($firstNumber, $secondNumber) {
      
      if ($firstNumber > $secondNumber) {
        echo 'Le premier nombre est plus grand';
      } else if ($firstNumber < $secondNumber) {
        echo 'Le premier nombre est plus petit';
      } else {
        echo 'Les deux nombres sont identiques';
      }
        
    }

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4</title>
</head>

<body>

    <h1>Exercice 4</h1>
    <p>Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :</p>
    <p>- Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième</p>
    <p>- Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième</p>
    <p>- Les deux nombres sont identiques si les deux nombres sont égaux</p>
    <p><?= numbers(25, 25) ?></p>

</body>

</html>