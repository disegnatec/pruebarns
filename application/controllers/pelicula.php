<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class pelicula extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('pelicula/pelicula_model');

    }

    function index()
    {
        if ($this->session->flashdata('success') != FALSE) {
            $data ['success'] = $this->session->flashdata('success');
        }
        if ($this->session->flashdata('error') != FALSE) {
            $data ['error'] = $this->session->flashdata('error');
        }
        $data['peliculas'] = $this->pelicula_model->get_all();

        $dataCuerpo['cuerpo'] = $this->load->view('menu/pelicula/tabla', $data, true);
        if ($this->input->is_ajax_request()) {
            echo $dataCuerpo['cuerpo'];
        } else {
            $this->load->view('menu/template', $dataCuerpo);
        }
    }





}