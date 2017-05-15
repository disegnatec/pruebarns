<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
require 'vendor/autoload.php'; // coloco esto aqui porque por alguna razon no lo toma del config de codeigniter

class valoracion extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('valoracion/valoracion_model');
        $this->load->model('pelicula/pelicula_model');
        $this->load->model('cliente/cliente_model');

    }

    function index()
    {
        if ($this->session->flashdata('success') != FALSE) {
            $data ['success'] = $this->session->flashdata('success');
        }
        if ($this->session->flashdata('error') != FALSE) {
            $data ['error'] = $this->session->flashdata('error');
        }
        $data['valoraciones'] = $this->valoracion_model->get_all();

        $dataCuerpo['cuerpo'] = $this->load->view('menu/valoracion/tabla', $data, true);
        if ($this->input->is_ajax_request()) {
            echo $dataCuerpo['cuerpo'];
        } else {
            $this->load->view('menu/template', $dataCuerpo);
        }
    }
    function all()
    {

        $data['valoraciones'] = $this->valoracion_model->get_all();

       echo json_encode($data);
    }

    function form($id = FALSE)
    {
        $data = array();
        $data['clientes'] = $this->cliente_model->get_all();
        $data['peliculas'] = $this->pelicula_model->get_all();
        if ($id != FALSE) {
            $data['valoracion'] = $this->valoracion_model->get_by(array('valoracion_id' => $id));
        }
        $this->load->view('menu/valoracion/form', $data);
    }

    function guardar()
    {

        $id = $this->input->post('valoracion_id');
        $cliente_id = $this->input->post('cliente_id');
        $pelicula_id = $this->input->post('pelicula_id');
        $valoracion_num = $this->input->post('valoracion_num');
        $logger = new Katzgrau\KLogger\Logger(__DIR__.'/logs');
        $datos = array(
            'cliente_id' => $cliente_id,
            'pelicula_id' => $pelicula_id,
            'valoracion_num' => $valoracion_num,
            'fecha' => date('Y-m-d h:i:s'),
        );
        if (empty($id)) {
            $data['resultado'] = $this->valoracion_model->set($datos);
            $datos['valoracion_id'] = $data['resultado'];
        } else {
            $datos['valoracion_id'] = $id;
            $data['resultado'] = $this->valoracion_model->update($datos);
        }
        if ($data['resultado'] != FALSE) {
            $json['success'] = 'Solicitud Procesada con exito';

            $logger->info('Se ha guardado una nueva valoracion id:'.$data['resultado'].' cliente:'.$cliente_id.' pelicula:'.$pelicula_id);

        } else {
            $logger->error('Ha ocurrido un error al guardar la valoracion id:'.$data['resultado'].' cliente:'.$cliente_id.' pelicula:'.$pelicula_id);
            $json['error'] = 'Ha ocurrido un error al procesar la solicitud';
        }
        if ($data['resultado'] === NOMBRE_EXISTE) {
            $json['error'] = $data['resultado'];
        }
        echo json_encode($json);
    }

    function eliminar()
    {
        $id = $this->input->post('valoracion_id');
        $pelicula_id = $this->input->post('pelicula_id');

        $datos = array(
            'valoracion_id' => $id,
            'pelicula_id' => $pelicula_id,
            'deleted_at' => date('Y-m-d h:i:s')
        );
        $data['resultado'] = $this->valoracion_model->softDelete($datos);
        if ($data['resultado'] != FALSE) {
            $json['success'] = 'Se ha eliminado exitosamente';
        } else {
            $json['error'] = 'Ha ocurrido un error al eliminar la ubicacoin';
        }
        echo json_encode($json);
    }



}