<?php

namespace Comportamiento\Mediator;

/**
 *
 * @author jonathan
 */
interface IUsuarioChat {

    public function recibe(string $de, string $msg);

    public function envia(string $a, string $msg);
}
