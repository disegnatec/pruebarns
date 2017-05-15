<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class cliente_model extends CI_Model
{

    private $table = 'cliente';
    private $nombre = 'cliente_nombre';
    private $id = 'cliente_id';
    private $apellido = 'cliente_apellido';
    private $deleted = 'deleted_at';

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function get_all()
    {
        $query = $this->db->where($this->deleted, NULL);
        $this->db->order_by($this->nombre, 'asc');
        $query = $this->db->get($this->table);
        return $query->result_array();
    }

}
