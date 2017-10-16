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
    require_once 'inc/Hero.class.php';
    require_once 'inc/Orc.class.php';
    /*
        Konstanten werden einmal initialisiert und können ihren Wert nicht ändern

        Mit define definierte Konstanten können auch in functions, if, while, for etc. definiert werden.

        Alternativ können Konstanten mit const deklariert werden.

        const HUHN = 5;

        Diese müssen aber im globalen Gültigkeitsbereich deklariert werden.
        Dh. NICHT in function, for, while etc.
    */
    define('HUHN', 5);
    define('BROT', 3);
    define('APFEL', 1);
    define('GIFT', -10);

   /*  $hero = new Character('Ignaz');
    $hero->eat();

    echo '<br>';

    $c2 = new Character('Pipilotta');
    $c2->eat(); */

    $character1 = [
        'name' => 'Ignaz',
        'posX' => 5,
        'posY' => 2,
        'health' => 320,
        'strength' => 100,
        'maxStepsX' => 3,
        'maxStepsY' => 3
    ];

    $character2 = [
        'name' => 'Lalobe',
        'posX' => 10,
        'posY' => 14,
        'health' => 240,
        'strength' => 200,
        'protection' => 10,
        'maxStepsX' => 2,
        'maxStepsY' => 2
    ];

    $hero = new Hero($character1);
    $hero->move(2, 1);
    $hero->move(-3, -2);
    $hero->move(10, -12);

    $hero->eat(HUHN);
    $hero->eat(GIFT);

    $hero->enchant();

    echo '<pre>';
    print_r($hero);
    echo '</pre>';

    $orc1 = new Orc($character2);
    $orc1->callCommander('Ludwig');

    echo '<pre>';
    print_r($orc1);
    echo '</pre>';

    echo '<hr>';
    $hero->fight($orc1);

    ?>
</body>
</html>