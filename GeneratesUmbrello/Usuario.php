<?php

require_once 'IUsuarioChat.php';
require_once 'ISalonChat.php';

/**
 * class Usuario
 * 
 */
class Usuario implements IUsuarioChat {
    /** Aggregations: */
    /** Compositions: */
    /*     * * Attributes: ** */

    /**
     * 
     * @access private
     */
    private $nombre;

    /**
     * 
     * @access private
     */
    private $salon;

    /**
     * 
     *
     * @return ISalonChat
     * @access public
     */
    public function getSalon() {
        
    }

// end of member function getSalon

    /**
     * 
     *
     * @param ISalonChat salon 

     * @return void
     * @access public
     */
    public function setSalon(ISalonChat $salon) {
        
    }

// end of member function setSalon

    /**
     * 
     *
     * @return string
     * @access public
     */
    public function getNombre() {
        
    }

// end of member function getNombre

    /**
     * 
     *
     * @param string nombre 

     * @return void
     * @access public
     */
    public function setNombre($nombre) {
        
    }

// end of member function setNombre

    /**
     * 
     *
     * @param string de 

     * @param string msg 

     * @return void
     * @access public
     */
    public function recibe($de, $msg) {
        
    }

// end of member function recibe

    /**
     * 
     *
     * @param string $a 

     * @param string $msg 

     * @return void
     * @access public
     */
    public function envia($a, $msg) {
        
    }

// end of member function envia
}
