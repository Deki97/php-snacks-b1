<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Snack 4</title>
</head>
<body>
    <!-- ## Snack 4
    Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

    <h3>Paragrafo originale</h3>
    <?php 
        $lorem = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit sunt accusamus itaque. repellat nihil deserunt, ea qui similique optio. id ab odit aliquam ullam nulla doloribus. architecto incidunt corrupti quod.';

        echo $lorem;
    ?>

    <h3>Paragrafo suddiviso ad ogni punto</h3>
    <?php 
        $exploded_array = explode('.', $lorem);
        
        var_dump($exploded_array);
    ?>
</body>
</html>