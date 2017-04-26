<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Comportamiento\Strategy;

/**
 * Description of BuenoNuevoRegularStrategy
 *
 * @author jonathan
 */
class NuevoStrategy implements LibroStrategy {

    public function findLibro(string $titulo): Libro {
        $libros = Biblioteca::ObtenerLibros();
        $newLibro = null;
        foreach ($libros as $libro) {
            if ($libro->getTitulo() == $titulo && $libro->getEstado() == 'nuevo') {
                $newLibro = $libro;
                break;
            }
        }
        return $newLibro;
    }

}
