<?php

namespace Comportamiento\Command;

/**
 *
 * @author jonathan
 */
interface IInvoker {

    public function setCommand(ICommand $command);

    public function invoke();
}
