<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class valoracion_model extends CI_Model
{

    private $table = 'valoracion';
    private $valoracion_num = 'valoracion_num';
    private $id = 'valoracion_id';
    private $drogueria_domain = 'drogueria_domain';
    private $deleted = 'deleted_at';


    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function get_all()
    {
        $query = $this->db->where($this->table.'.'.$this->deleted, NULL);
        $this->db->order_by($this->id, 'asc');
        $this->db->join('cliente','cliente.cliente_id='.$this->table.'.cliente_id');
        $this->db->join('pelicula','pelicula.pelicula_id='.$this->table.'.pelicula_id');
        $query = $this->db->get($this->table);
        return $query->result_array();
    }

    function get_by($array)
    {
        $this->db->where($array);
        $query = $this->db->get($this->table);
        return $query->row_array();
    }

    function set($data)
    {

        $this->db->trans_start();
        $this->db->insert($this->table, $data);
        $insert_id = $this->db->insert_id();
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE)
            return FALSE;
        else
            return $insert_id;
    }


    function update($grupo)
    {

        $this->db->trans_start();
        $this->db->where($this->id, $grupo[$this->id]);
        $this->db->update($this->table, $grupo);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE)
            return FALSE;
        else
            return TRUE;

    }


    function softDelete($data)
    {
        $this->db->trans_start();
        $this->db->where($this->id, $data[$this->id]);
        $this->db->update($this->table, $data);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE)
            return FALSE;
        else
            return TRUE;


    }
}
