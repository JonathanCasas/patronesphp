<?php

namespace Comportamiento\Mediator;

/**
 * Description of Usuario
 *
 * @author jonathan
 */
class Usuario implements IUsuarioChat {

    private $nombre;
    private $salon;

    public function __construct(ISalonDeChat $salonDeChat) {
        $this->salon = $salonDeChat;
    }

    public function envia(string $a, string $msg) {
        $this->salon->envia($this->nombre, $a, $msg);
    }

    public function recibe(string $de, string $msg) {
        $s = "El usuario {$de} te dice {$msg}";
        echo "{$this->nombre }: {$s}<br>";
    }

    function getNombre() {
        return $this->nombre;
    }

    function getSalon() {
        return $this->salon;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setSalon($salon) {
        $this->salon = $salon;
    }
}
