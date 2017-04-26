<?php

namespace Estructurales\Proxy;

/**
 * Description of ConnectionManager
 *
 * @author jonathan
 */
class ConnectionManager {

    public static $hayConexion;

    public function __construct() {
        self::$hayConexion = false;
    }

    public static function conectate() {
        self::$hayConexion = true;
    }

    public static function desconectate() {
        static::$hayConexion = false;
    }

    public static function hayConexion() {
        return static::$hayConexion;
    }

}
