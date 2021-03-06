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
            echo '<br>Feld kann nicht erreicht werden.';
        }

        echo '<br>Neue Position: ',  $this->posX, ' ', $this->posY;
    }

    /**
     * Einen anderen Character bekämpfen. Je nach Stärke wird unterschieldlicher Schaden zugefügt
     *
     * @param Character $other
     * @return void
     */
    public function fight(Character $other) {
        // Bin ich stärker als $other, wird die Differenz in der Stärke
        // $other von health abgezogen, anonsten wird 0 abgezogen.
        if ($this->strength > $other->getStrength()) {
            $damage = abs($this->strength - $other->getStrength());
        }
        else {
            // TODO: guten Wert berechnen
            $damage = abs(round(($this->strength - $other->getStrength()) / 10));
        }
    
        $other->damage($damage);
        
        echo $this->name, ' fights ', $other->getName(), ' damage: ', $damage, '<br>';

    }

    /**
     * Schaden wird zugefügt
     *
     * @param int $hit
     * @return void
     */
    public function damage(int $hit) {
        $this->health -= $hit;

        // Character stirbt, wenn $health 0 erreicht
        if ($this->health <= 0) {
            $this->die();
        }
    }

    /**
     * Gibt die aktuelle Stärke zurück
     *
     * @return int
     */
    public function getStrength() : int {
        return $this->strength;
    }

    /**
     * Gibt den protected $name zurück
     *
     * @return string
     */
    public function getName() : string {
        return $this->name;
    }
    
    /**
     * Erhöht $health um $power
     *
     * @param int $power
     * @return void
     */
    public function eat(int $power) {
        echo $this->name .  " is eating<br>";
        $this->health += $power;
        echo $this->name,  " health: ", $this->health, '<br>';
    }

    protected function die() {
        echo "died";
    }

}