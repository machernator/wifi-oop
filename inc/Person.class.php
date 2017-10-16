<?php
// Mit dem Schlüsselwort class werden Klassen erstellt
class Person
{
    /* 
        Eigenschaften/Attributes der Klasse (Variablen)
        Zugriffsmodifikatoren regeln, welche Eigenschaften und 
        Methoden von außen zugänglich sein sollen.
        private, protected: es kann nicht von außen zugegriffen werden
        public: von außen ist der Zugriff möglich 
    */
    private $kdnr = '';
    private $anrede = '';
    private $titel = '';
    private $vorname = '';
    private $nachname = '';

    // Methoden der Klasse (Funktionen)
    public function greeting() {
        echo "Greeting";
    }
}