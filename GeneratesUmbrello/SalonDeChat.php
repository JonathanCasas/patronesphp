<?php
require_once 'ISalonChat.php';
require_once 'array.php';


/**
 * class SalonDeChat
 * 
 */
class SalonDeChat
      implements ISalonChat
{

  /** Aggregations: */

  /** Compositions: */

   /*** Attributes: ***/

  /**
   * 
   * @access private
   */
  private $participantes;




  /**
   * 
   *
   * @param Usuario usuario 

   * @return void
   * @access public
   */
  public function Registra( $usuario) {
    trigger_error("Implement " . __FUNCTION__);
  } // end of member function Registra

  /**
   * 
   *
   * @param string de 

   * @param string a 

   * @param string mensaje 

   * @return void
   * @access public
   */
  public function envia( $de,  $a,  $mensaje) {
    trigger_error("Implement " . __FUNCTION__);
  } // end of member function envia



} // end of SalonDeChat
?>
