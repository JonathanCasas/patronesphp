<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Comportamiento\Strategy;

/**
 * Description of Biblioteca
 *
 * @author jonathan
 */
class Biblioteca {

    /**
     * @var array()
     */
    private static $libros;

    public function __construct() {
        $libro = new Libro();
        $libro->setEstado('bueno');
        $libro->setTitulo('Un titulo Bueno');
        $libro1 = new Libro();
        $libro1->setEstado('regular');
        $libro1->setTitulo('Un titulo Regular');
        $libro2 = new Libro();
        $libro2->setEstado('nuevo');
        $libro2->setTitulo('Un titulo Nuevo');
        self::$libros[] = $libro;
        self::$libros[] = $libro1;
        self::$libros[] = $libro2;
    }

    public static function ObtenerLibros(): array {
        return self::$libros;
    }

}
