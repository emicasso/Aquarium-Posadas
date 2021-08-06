<?php

defined('BASEPATH') or exit('No direct scrpits access allowed');

class admin_controller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('login')) {
            redirect('Inicio_sesion');
        }
    }

    public function usuario_admin()
    {
        $data['titulo'] = 'Administrador';
        $this->load->view('Plantillas/header', $data);
        $this->load->view('Plantillas/vid-navbar-admin');
        $this->load->view('contenido/contenido_admin_view');
        $this->load->view('Plantillas/footer');
    }

    public function admin()
    {
        $this->load->model('producto_model');
        $data['producto'] = $this->producto_model->select_producto();
        $this->load->view('Plantillas/header', $data);
        $this->load->view('Plantillas/navbar-princ-adm');
        $this->load->view('contenido/principal');
        $this->load->view('Plantillas/footer');
    }

    public function ver_ventas()
    {
        $this->load->model('ventas_model');
        $data['las_ventas'] = $this->ventas_model->select_ventas();
        
        $this->load->view('Plantillas/header', $data);
        $this->load->view('Plantillas/vid-navbar-admin');
        $this->load->view('contenido/ventas_view');
        $this->load->view('Plantillas/footer');
    }

    public function ver_detalle_venta($id)
    {
        $this->load->model('ventas_model');
        $data['detalles'] = $this->ventas_model->get_detalle_venta_id($id);

        $this->load->view('Plantillas/header', $data);
        $this->load->view('Plantillas/vid-navbar-admin');
        $this->load->view('contenido/detalle_ventas_view');
        $this->load->view('Plantillas/footer');
    }

    public function buscar_venta()
    {
        $this->load->model('ventas_model');
        $data['titulo'] = 'Ventas';
        
        $fecha_inicio = $this->input->post("fecha_inicio");
        $fecha_fin  = $this->input->post("fecha_fin");

        if ($fecha_inicio > $fecha_fin) {
            echo "<script>alert('Ingrese fechas validas');</script>";
            redirect('admin_ventas', 'refresh');
        } else {

            $data['las_ventas'] = $this->ventas_model->buscar_venta($fecha_inicio, $fecha_fin);

            $this->load->view('Plantillas/header', $data);
            $this->load->view('Plantillas/vid-navbar-admin');
            $this->load->view('contenido/ventas_view');
            $this->load->view('Plantillas/footer');
        }
    }
}
