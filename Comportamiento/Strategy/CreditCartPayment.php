<?php

namespace Comportamiento\Strategy;

/**
 * Description of CreditCartPayment
 *
 * @author novatec
 */
class CreditCartPayment implements PaymentInterface {

    private $name;
    private $cardNumber;
    private $ccv;
    private $dateOfExpiry;
    
    
    function __construct($name, $cardNumber, $ccv, $dateOfExpiry) {
        $this->name = $name;
        $this->cardNumber = $cardNumber;
        $this->ccv = $ccv;
        $this->dateOfExpiry = $dateOfExpiry;
    }

    public function pay($amount) {
        return "payment {$amount} credit cart";
    }
    
    function getName() {
        return $this->name;
    }

    function getCardNumber() {
        return $this->cardNumber;
    }

    function getCcv() {
        return $this->ccv;
    }

    function getDateOfExpiry() {
        return $this->dateOfExpiry;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setCardNumber($cardNumber) {
        $this->cardNumber = $cardNumber;
    }

    function setCcv($ccv) {
        $this->ccv = $ccv;
    }

    function setDateOfExpiry($dateOfExpiry) {
        $this->dateOfExpiry = $dateOfExpiry;
    }

}
