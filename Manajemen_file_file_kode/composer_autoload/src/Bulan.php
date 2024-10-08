<?php
namespace Vendor\ComposerAutoload;

class Bulan {
    private $fase;
    private $jarak;

    public function __construct($fase, $jarak) {
        $this->fase = $fase;
        $this->jarak = $jarak;
    }

    public function info() {
        return "Bulan: Fase " . $this->fase . ", Jarak ke Bumi: " . $this->jarak . " km";
    }
}
?>
