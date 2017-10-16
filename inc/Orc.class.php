<?php
class Orc extends Character {
    protected $protection = 0;

    /* 
        Eine Methode der Elternklasse wird überschrieben, wenn
        in der Kind Klasse eine Methode mit dem selben Namen
        deklariert wird. (override)

        Ist eine gleichnamige Methode in Eltern/Kind Klasse gesetzt,
        wird beim Aufruf die nähere, das heißt die der Kind Klasse 
        aufgerufen.
    */
    public function __construct(array $conf) {
        /*
            Soll ein Konstruktor den Konstruktor der Elternklasse nicht
            ersetzen, sondern erweitern, muss der Konstruktor der
            Elternklasse explizit aufgerufen werden.
        */
        parent::__construct($conf);

        if (array_key_exists('protection', $conf)) {
            $this->protection = $conf['protection'];
        }
        else {
            die('Game Over: Protection nicht korrekt mitgegeben.');
        }
    }

    /**
     * Ruft den Commander um Hilfe an
     *
     * @param string $name
     * @return void
     */
    public function callCommander(string $name) {
        echo '<br>', $name, ', help me!';
    }
}