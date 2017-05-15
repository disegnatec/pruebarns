<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class pelicula_model extends CI_Model
{

    private $table = 'pelicula';
    private $nombre = 'pelicula_nombre';
    private $id = 'pelicula_id';
    private $categoria = 'categoria';
    private $deleted = 'deleted_at';

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function get_all()
    {

        $sql = 'select ' . $this->table . '.* , (select count(valoracion_id) from valoracion where valoracion.pelicula_id=pelicula.pelicula_id) as cantidad_valoraciones,(select Avg(valoracion_num) from valoracion where valoracion.pelicula_id=pelicula.pelicula_id) as promedio from ' . $this->table . ' where ' . $this->deleted . ' is NULL';

        $query = $this->db->query($sql);
        return $query->result_array();
    }


}
