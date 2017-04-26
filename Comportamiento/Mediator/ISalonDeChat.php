<?php

namespace Comportamiento\Mediator;

/**
 * Description of ISalonDeChat
 *
 * @author jonathan
 */
interface ISalonDeChat {
    
    public function registra(Usuario $usuario);
    
    public function envia(string $de, string $a, string $msg);
}
