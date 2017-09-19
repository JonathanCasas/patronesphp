<?php

namespace Creacionales\Singleton;

/**
 * Description of ConecctionDB
 *
 * @author jonathan
 */
class ConecctionDB {

    private static $instace;
    private $pdo;

    private function __construct() {
        $this->pdo = new \PDO("mysql:host=localhost;dbname=laravel", 'root', 'david');
    }

    public function __clone() {
        throw new \Exception('operacion no soportada');
    }

    /**
     * @return \PDO
     */
    public function getConection() {
        return $this->pdo;
    }

    /**
     * @return ConecctionDB
     */
    public static function getInstance() {
        if (is_null(self::$instace)) {
            self::$instace = new ConecctionDB();
        }
        return self::$instace;
    }

}
