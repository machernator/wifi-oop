<?php
class Teppichrolle {
    private $rolle_id;
    private $parent_rolle_id;
    private $name;
    private $farbe;
    private $breite;
    private $laenge;
    private $charge;
    private $rollenNr;
    /* alle weiteren Felder aus der Tabelle */

    public function __construct(int $id=0, array $newData=[]) {
        if ($id > 0) {
            $this->rolle_id = $id;
            $this->load();
        }
        elseif (count($newData) > 0) {
            $this->rolle_id = 0;
            // Attribute aus $newData befüllen
            $this->name = $newData['name'];
            $this->farbe = $newData['farbe'];
            // etc.

            // insert
            $this->save();
        }
        else {
            // ERROR!
        }
    }

    /**
     * Teppichrolle der Länge nach teilen, erstellt neuen Teppich
     *
     * @param int $length   abzutrennende Länge, Länge des neuen Teppichs
     * @return Teppichrolle
     */
    public function changeLength(int $length) : Teppichrolle {
        // Länge ändern
        $this->laenge -= $length;
        // Update
        $this->save();

        // Neue Rolle erzeugen
        $newData = [
            "name" => $this->name,
            "farbe" => $this->farbe,
            "breite" => $this->breite,
            "laenge" => $length,
            // etc.
        ];

        $newRolle = new Teppichrolle(0, $newData);
        return $newRolle;
    }

    /**
     * Teppichrolle der Breite nach teilen, erstellt neuen Teppich
     *
     * @param int $width    abzutrennende Breite, Breite des neuen Teppichs
     * @return Teppichrolle
     */
    public function changeWidth(int $width) : Teppichrolle {

    }

    /**
     * Update des Datensatzes in der DB
     *
     * @return bool
     */
    private function save() : bool {
        if ($this->rolle_id === 0) {
            // insert

            // letzte insert_id in $this->rolle_id speichern
        }
        else {
            // update
        }
    }

    private function load() : bool {
        // Sql erstellen
        $sql = "SELECT * FROM teppichrolle WHERE rolle_id=" .  $this->rolle_id;
        // query absetzen, Attribute befüllen
        
        // $row wurde ausgelesen
        $this->name = $row['name'];
        $this->farbe = $row['farbe'];
        $this->breite = $row['breite'];
        // etc.

    }
}