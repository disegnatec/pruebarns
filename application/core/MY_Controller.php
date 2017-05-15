<?php
/**
 * Created by PhpStorm.
 * User: Jhainey
 * Date: 31/05/2015
 * Time: 15:29
 */

/**
 * Class main_controller
 *  * @property valoracion_model $valoracion_model
 *  * @property pelicula_model $pelicula_model
 *  * @property cliente_model $cliente_model
 */
class MY_Controller extends CI_Controller {
    function __construct() {
        parent::__construct();

        $this->load->library('session');

    }
}