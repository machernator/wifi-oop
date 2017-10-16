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

        // Prozedurale Programmierung
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

        // echo greeting($person2);
        
        // OOP
        /*
            Erstellen eines Objekts
            Anhand des Bauplans (Klasse) wird ein Objekt mit den in der
            Klasse deklarierten Eigenschaften und Methoden erstellt.
            Die öffentlichen M/E sind für uns auf- bzw. abrufbar.

            Attribute werden beim Erstellen eines Objekts an den
            Konstruktor weiter gegeben.

            Von der selben Klasse können beliebig viel Objekte erstellt werden.
        */
        $p1 = new Person($person);
        $p2 = new Person($person2);

        echo $p1->greeting();
        echo '<br>';
        echo $p2->greeting();

        // Aufrufen einer Methode: $nameDesObjekts->nameDerMethode()
        $p1->greeting();
        // Aufrufen eines Attributs: $nameDesObjekts->nameDesAttributs
        $p1->test = 'manipuliert';
        echo $p1->test;
    ?>
</body>
</html>