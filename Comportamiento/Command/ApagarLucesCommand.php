<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Comportamiento\Command;

/**
 * Description of ApagarLucesCommand
 *
 * @author jonathan
 */
class ApagarLucesCommand implements ICommand {

    /**
     * @var LucesReceiber
     */
    private $luces;

    public function __construct(LucesReceiber $luces) {
        $this->luces = $luces;
    }

    public function execute() {
        $this->luces->Apagar();
        return "Apagando luces";
    }
}
