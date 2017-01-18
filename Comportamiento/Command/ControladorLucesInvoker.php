<?php

namespace Comportamiento\Command;

/**
 * Description of ControladorLucesInvoker
 *
 * @author jonathan
 */
class ControladorLucesInvoker implements IInvoker {

    private $command;

    public function invoke() {
       return $this->command->execute();
    }

    public function setCommand(ICommand $command) {
        $this->command = $command;
    }

}
