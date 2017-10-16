<?php
/* 
    Die Basisklasse für unsere Spielfiguren.
*/
class Character {
    // Position am Spielplan
    protected $posX = 0;
    protected $posY = 0;
    protected $name = '';
    protected $health = 0;
    protected $strength = 0;
    protected $maxStepsX = 0;
    protected $maxStepsY = 0;


    public function __construct (array $conf) {
        // Prüfen, ob der erwartete Wert mitgegeben wurde
        if (array_key_exists('posX', $conf)) {
            $this->posX = $conf['posX'];
        }
        else {
            die('Game Over: Start Position wurde nicht korrekt mitgegeben.');
        }

        if (array_key_exists('posY', $conf)) {
            $this->posY = $conf['posY'];
        }
        else {
            die('Game Over: Start Position wurde nicht korrekt mitgegeben.');
        }

        if (array_key_exists('name', $conf)) {
            $this->name = $conf['name'];
        }
        else {
            die('Game Over: Name nicht mitgeben.');
        }

        if (array_key_exists('health', $conf)) {
            $this->health = $conf['health'];
        }
        else {
            die('Game Over: Lebenskraft nicht mitgegeben.');
        }

        if (array_key_exists('strength', $conf)) {
            $this->strength = $conf['strength'];
        }
        else {
            die('Game Over: Stärke mitgegeben.');
        }

        if (array_key_exists('maxStepsX', $conf)) {
            $this->maxStepsX = $conf['maxStepsX'];
        }
        else {
            die('Game Over: die Reichweite wurde nicht korrekt mitgegeben.');
        }

        if (array_key_exists('maxStepsY', $conf)) {
            $this->maxStepsY = $conf['maxStepsY'];
        }
        else {
            die('Game Over: die Reichweite wurde nicht korrekt mitgegeben.');
        }
    }

    /**
     * Bewegt den Character auf dem Spielplan um die angegebenen Felder
     *
     * @param int $x    Felder auf der X-Achse
     * @param int $y    Felder auf der Y-Achse
     * @return void
     */
    public function move(int $x, int $y) {
        // abs ermittelt den positiven Wert einer Zahl
        if ($x <= abs($this->maxStepsX) && $y <= abs($this->maxStepsY)) {
            // Kurz: $this->posX += $x;
            $this->posX = $this->posX + $x; 
            $this->posY = $this->posY + $y;
        }
        else {
            echo 'Feld kann nicht erreicht werden.';
        }

        echo '<br>Neue Position: ',  $this->posX, ' ', $this->posY;
    }

    public function fight() {
        echo "fighting";
    }

    public function eat() {
        echo $this->name .  " is eating";
    }

    protected function die() {
        echo "died";
    }

}