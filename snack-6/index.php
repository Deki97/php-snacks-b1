<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Snack 6</title>
</head>
<body>
    <!-- ## Snack 6
    Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

    <?php 
        $students = [
            [
                'name' => 'Marco',
                'lastname' => 'Verdi',
                'voti' => [
                    5,
                    8,
                    9,
                    7
                ]
            ],
            [
                'name' => 'Giuseppe',
                'lastname' => 'Rossi',
                'voti' => [
                    4,
                    10,
                    4,
                    6
                ]
            ],
            [
                'name' => 'Luigi',
                'lastname' => 'Bianchi',
                'voti' => [
                    5,
                    4,
                    9,
                    8
                ]
            ],
            [
                'name' => 'John',
                'lastname' => 'Doe',
                'voti' => [
                    10,
                    8,
                    9,
                    8
                ]
            ],
        ];
    ?>

    <?php 
        for($i = 0; $i < count($students); $i++) {
            $this_student = $students[$i];
            var_dump($this_student);
        }
    ?>
</body>
</html>