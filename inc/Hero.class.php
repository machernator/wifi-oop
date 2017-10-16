<?php
/**
 * Heros erweitern Character
 * Eine Klasse kann von einer anderen Klassen alle Eigenschaften und
 * Methoden erben.
 * 
 * Mittels extends geben wir die Elternklasse an
 */
class Hero extends Character {
    public function enchant() {
        echo '<br>', $this->name, ' hat alle bezaubert!';
    }
}