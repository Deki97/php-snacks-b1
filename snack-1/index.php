<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Snack 1</title>
</head>
<body>
    <!-- ## Snack 1
    Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
    Olimpia Milano - Cantù | 55-60 -->

    <?php 
        $matches = [
            [
                'home_team' => 'Olimpia Milano',
                'home_points' => 55,
                'guests_team' => 'Cantù',
                'guests_points' => 60
            ],
            [
                'home_team' => 'Reyer Venezia',
                'home_points' => 78,
                'guests_team' => 'Varese',
                'guests_points' => 67
            ],
            [
                'home_team' => 'Dinamo Sassari',
                'home_points' => 96,
                'guests_team' => 'Reggio Emilia',
                'guests_points' => 94
            ],
            [
                'home_team' => 'Pesaro',
                'home_points' => 63,
                'guests_team' => 'Brescia',
                'guests_points' => 61
            ],
            [
                'home_team' => 'Benetton Treviso',
                'home_points' => 80,
                'guests_team' => 'Ferrara',
                'guests_points' => 75
            ]
        ]
    ?>

    <h1>Lista delle partite</h1>

    <?php for($i = 0; $i < count($matches); $i++) { ?>
        <?php $this_match = $matches[$i]; ?>

        <div class="match">
            <?php echo $this_match['home_team']; ?> - <?php echo $this_match['guests_team']; ?> | 
            <?php echo $this_match['home_points']; ?>-<?php echo $this_match['guests_points']; ?>
        </div>

    <?php } ?>

</body>
</html>