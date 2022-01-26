<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Snack 3</title>
</head>
<body>
    <!-- ## Snack 3
    Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

    <h3>Array di numeri random generati, non ripetuti</h3>

    <?php 
        $numbers = [];

        while(count($numbers) < 15) {
            $random_number = rand(1, 100);

            if(!in_array($random_number, $numbers)) {
                $numbers[] = $random_number;
            }
        }

        var_dump($numbers);
    ?>
</body>
</html>