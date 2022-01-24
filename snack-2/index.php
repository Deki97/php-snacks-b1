<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Snack 2</title>
</head>
<body>
    
<!-- ## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che:
- name sia più lungo di 3 caratteri, 
- che mail contenga un punto e una chiocciola 
- e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->


<!-- Passo come parametri GET name, mail e age -->
<?php 
    $nome = $_GET['name'];
    $email = $_GET['mail'];
    $eta = $_GET['age'];
    // var_dump($nome);
    // var_dump($email);
    // var_dump($eta);

    
    $isNameGreaterThanThree = strlen($nome); // true or false
    // var_dump($isNameGreaterThanThree);

    $isAgeANumber = is_numeric($eta); // true or false
?>

    <?php if( ($isNameGreaterThanThree > 3) === false || strpos($email, '@') === false || strpos($email, '.') === false || $isAgeANumber === false ) { ?>
        <h3 class="denied">Accesso negato</h3>
    <?php } else { ?>
        <h3 class="allowed">Accesso riuscito</h3>
    <?php } ?>

</body>
</html>