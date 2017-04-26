<?php

class test {

    private static $instance;
    private $name;
    private $lastname;

    private function __construct() {
        ;
    }

    function getName() {
        return $this->name;
    }

    function getLastname() {
        return $this->lastname;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setLastname($lastname) {
        $this->lastname = $lastname;
    }

    /**
     * @return test
     */
    public static function getInstance() {
        if (self::$instance instanceof test) {
            return self::$instance;
        } else {
            self::$instance = new test();
            return self::$instance;
        }
    }

}

class implement {

    public function __construct() {
        $test = test::getInstance();
        $test->setLastname("jonatha");
        $test->setName("casas");
    }

}

$implement = new implement();
$test= test::getInstance();
echo $test->getName();
