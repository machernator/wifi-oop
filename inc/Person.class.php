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
        /*
            Methoden können auf Klassenattribute zugreifen.
            Beim Zugriff muss aber das Objekt angegeben werden. Da zum
            Zeitpunkt der Klassendeklaration noch nicht bekannt ist, 
            in welcher Variable das Objekt gespeichert wird, verwenden
            einen Platzhalter: $this (Ich, meines)

            $this macht keinen Unterschied bei den Zugriffsmodifikatoren 
            (public, private, protected). Der interne Zugriff unterliegt
            keinen Einschränkungen.

            $anrede wäre eine lokale Variable, die nur bis zum Beenden
            des Aufrus existiert. Member Attribute müssen über $this->member
            aufgerufen werden.
        */
        $this->kdnr = $data['kdnr'];
        $this->anrede = $data['anrede'];
        $this->titel = $data['titel'];
        $this->vorname = $data['vorname'];
        $this->nachname = $data['nachname'];
    }

    // Methoden der Klasse (Funktionen)
    public function greeting() {
        /* 
        Lokale Variable!
        $anrede = 'xxx';
        echo '<br>';
        echo $anrede; */
        return 'Guten Tag ' .
            $this->anrede . 
            ' ' .
            $this->titel . 
            ' ' .
            $this->vorname . 
            ' ' .
            $this->nachname;
    }
}