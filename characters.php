<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Characters eines Rollenspiels</title>
</head>
<body>
    <h1>Characters eines Rollenspiels</h1>
    <?php
    require_once 'inc/Character.class.php';
   /*  $c1 = new Character('Ignaz');
    $c1->eat();

    echo '<br>';

    $c2 = new Character('Pipilotta');
    $c2->eat(); */

    $character1 = [
        'name' => 'Ignaz',
        'posX' => 5,
        'posY' => 2,
        'strength' => 100,
        'maxStepsX' => 3,
        'maxStepsY' => 3
    ];

    $c1 = new Character($character1);
    echo '<pre>';
    print_r($c1);
    echo '</pre>';

    ?>
</body>
</html>