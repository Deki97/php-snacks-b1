<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Snack 5</title>
</head>
<body>
    <!-- ## Snack 5
    Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

    <?php

    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];

    ?>

    <h3>Insegnanti:</h3>
    <div class="teachers">
        <?php 
            for($i = 0; $i < count($db['teachers']); $i++) {
                $this_teacher = $db['teachers'][$i];
                var_dump($this_teacher['name']);
            }
        ?>
    </div>


    <h3>PM:</h3>
    <div class="pm">
        <?php 
            for($i = 0; $i < count($db['pm']); $i++) {
                $this_pm = $db['pm'][$i];
                var_dump($this_pm['name']);
            }
        ?>
    </div>
</body>
</html>