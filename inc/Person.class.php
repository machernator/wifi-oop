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
    public $test = 'Test';

    /* 
        Konstruktor
        Der Name ist vorgegeben: __construct
        Es handelt sich um eine ganz normale Funktione, die beim
        erstellen eines Objekts automatisch von PHP aufgerufen wird.
        Sie ermöglicht eine Initialisierung des Objekts.
        
        Wie jede Funktion kann der Konstruktor Funktionsparameter definieren.
        Der Konstruktor ist eine sog. "magic function", dh. PHP kümmert 
        sich um den Aufruf bzw. die Verwendung.

        Ein Konstruktor ist optional, wenn er aber existiert, wird er
        von PHP aufgerufen. Er muss public deklariert sein
    */
    public function __construct(array $data) {
        print_r($data);
    }



    // Methoden der Klasse (Funktionen)
    public function greeting() {
        echo "Greeting";
    }
}