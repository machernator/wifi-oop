<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teppiche</title>
</head>
<body>
    <h1>Teppiche</h1>
    <?php
    require_once 'inc/Teppichrolle.class.php';
    // Id wurde per GET ausgelesen
    $id = 23523;
    $rolle = new Teppichrolle($id);
    // neue Rolle in Rolle 2
    $rolle2 = $rolle->changeLength(220);
    ?>
</body>
</html>