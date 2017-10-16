<?php
// Mit dem Schlüsselwort class werden Klassen erstellt
class Person
{
    // Eigenschaften/Attributes der Klasse (Variablen)
    $kdnr = '';
    $anrede = '';
    $titel = '';
    $vorname = '';
    $nachname = '';

    // Methoden der Klasse (Funktionen)
    function greeting() {
        echo "Greeting";
    }
}