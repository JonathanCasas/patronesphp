<?php

require_once 'Usuario.php';

/**
 * class ISalonChat
 * 
 */
interface ISalonChat {
    /** Aggregations: */
    /** Compositions: */

    /**
     * 
     *
     * @param Usuario usuario 

     * @return void
     * @access public
     */
    public function Registra(Usuario $usuario);

    /**
     * 
     *
     * @param string de 

     * @param string a 

     * @param string mensaje 

     * @return void
     * @access public
     */
    public function envia($de, $a, $mensaje);
}

// end of ISalonChat
?>
