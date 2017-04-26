<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Comportamiento\Strategy;

/**
 * Description of Regular
 *
 * @author jonathan
 */
class RegularStrategy implements LibroStrategy {

    //put your code here
    public function findLibro(string $titulo): Libro {
        $libros = Biblioteca::ObtenerLibros();
        $newLibro = null;
        foreach ($libros as $libro) {
            if ($libro->getTitulo() == $titulo && $libro->getEstado() == 'regular') {
                $newLibro = $libro;
                break;
            }
        }
        return $newLibro;
    }

}
