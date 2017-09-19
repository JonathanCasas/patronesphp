<?php

namespace Creacionales\Singleton;

/**
 * Description of Singleton
 *
 * @author jonathan
 */
class Singleton {

    public static function main() {
        $conection = ConecctionDB::getInstance();
        $statment = $conection->getConection()->prepare("SELECT * FROM `Categorias`");
        $statment->execute();
        var_dump($statment->fetchAll());
    }

}
