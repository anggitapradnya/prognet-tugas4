<?php
namespace Vendor\ComposerAutoload;

class Matahari {
    private $fase;
    private $jarak;

    public function __construct($fase, $jarak) {
        $this->fase = $fase;
        $this->jarak = $jarak;
    }

    public function info() {
        return "Matahari: Fase " . $this->fase . ", Jarak ke Bumi: " . $this->jarak . " km";
    }
}
?>
