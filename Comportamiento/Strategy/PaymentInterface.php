<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Comportamiento\Strategy;
/**
 *
 * @author novatec
 */
interface PaymentInterface {

    public function pay($amount);
}
