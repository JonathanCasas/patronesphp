<?php

namespace Comportamiento\Mediator;

/**
 * Description of SalonDeChat
 *
 * @author jonathan
 */
class SalonDeChat implements ISalonDeChat {

    /**
     * @var array(Comportamiento\Mediator\Usuario) Description
     */
    private $participantes;

    public function envia(string $de, string $a, string $msg) {
        if (isset($this->participantes[$de]) && isset($this->participantes[$a])) {
            $usuario = $this->participantes[$a];
            $usuario->recibe($de, $msg);
        } else {
            echo 'usuario inexistente';
        }
    }

    public function registra(Usuario $usuario) {
        $this->participantes[$usuario->getNombre()] = $usuario;
    }

}
