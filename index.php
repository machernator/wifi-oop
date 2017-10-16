<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OOP - Objektorientiertes programmieren</title>
</head>
<body>
    <h1>OOP</h1>
    <?php
        require_once "inc/Person.class.php";
        // Begrüßung erstellen
        function greeting(array $data) {
            return 'Guten Tag ' .
                    $data['anrede'] . 
                    ' ' .
                    $data['titel'] . 
                    ' ' .
                    $data['vorname'] . 
                    ' ' .
                    $data['nachname'];
        }

        // Assoziatives Array als Datencontainer
        $person = [
            "kdnr" => "12345",
            "titel" => "Mag.",
            "anrede" => "Herr",
            "vorname" => "Hans",
            "nachname" => "Müller"
        ];
        
        $person2 = [
            "kdnr" => "12346",
            "titel" => "",
            "anrede" => "Frau",
            "vorname" => "Dorothea",
            "nachname" => "Duck"
        ];

        echo greeting($person2);

       /*  echo 'Guten Tag ' .
             $person['anrede'] . 
             ' ' .
             $person['titel'] . 
             ' ' .
             $person['vorname'] . 
             ' ' .
             $person['nachname']; */

    
    ?>
</body>
</html>