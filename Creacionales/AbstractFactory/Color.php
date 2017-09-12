<?php

namespace Creacionales\AbstractFactory;

/**
 * Description of Color
 *
 * @author jonathan
 */
abstract class Color {

    /**
     * @var string
     */
    private $description;

    public abstract function colorea(TV $tv);

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

}
