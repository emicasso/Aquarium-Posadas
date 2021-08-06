<?php

defined('BASEPATH') or exit('No direct scrpits access allowed');

class Mensaje_controller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function form_agregar_consulta()
    {
        $this->load->model('consulta_model');


        $data['titulo'] = 'Agregar Mensaje';
        $this->load->view('Plantillas/header', $data);
        $this->load->view('Plantillas/vid-navbar');
        $this->load->view('contenido/contacto');
        $this->load->view('Plantillas/footer');
    }

    public function insertar_consulta()
    {
        $data = array(
            'apellido' => $this->input->post('apellido'),
            'nombre' => $this->input->post('nombre'),
            'mail' => $this->input->post('mail'),
            'motivo' => $this->input->post('motivo'),
            'mensaje' => $this->input->post('mensaje')
        );
        $this->load->model('consulta_model');
        $this->consulta_model->guardar_consulta($data);
        echo "<script>alert('Su mensaje fue enviado con exito!');</script>";
        redirect('Contacto');
    }

    public function registrar_consulta()
    {
        $this->form_validation->set_rules('apellido', 'Ingresar Apellido', 'required');
        $this->form_validation->set_rules('nombre', 'Ingresar Nombre', 'required');
        $this->form_validation->set_rules('mail', 'Ingrese su Email', 'required|valid_email');
        $this->form_validation->set_rules('motivo', 'Ingresar Motivo', 'required');
        $this->form_validation->set_rules('mensaje', 'Ingrese Mensaje', 'required');

        $this->form_validation->set_message('required', 'El campo %s es obligatorio');
        $this->form_validation->set_message('valid_email', 'Debe ingresar un email valido');

        if ($this->form_validation->run() == FALSE) {
            $this->form_agregar_consulta();
        } else {
            $this->insertar_consulta();
        }
    }

    public function listar_mensaje()
    {
        $this->load->model('consulta_model');
        $data['mensajes'] = $this->consulta_model->select_mensajes();
        $data['titulo'] = 'Lista mensajes';

        $this->load->view('Plantillas/header', $data);
        $this->load->view('Plantillas/vid-navbar-admin');
        $this->load->view('contenido/mensajes_admin_view');
        $this->load->view('Plantillas/footer');
    }


    public function eliminar_mensaje($id = NULL)
    {
        $data = array(
            'estado' => '0'
        );
        $this->load->model('consulta_model');
        $this->consulta_model->actualizar_mensaje($data, $id);
        redirect('Mensaje_controller/listar_mensaje');
    }
    public function activar_mensaje($id = NULL)
    {
        $data = array(
            'estado' => '1'
        );
        $this->load->model('consulta_model');
        $this->consulta_model->actualizar_mensaje($data, $id);
        redirect('Mensaje_controller/listar_mensaje');
    }


    public function buscar_cliente()
    {
        $this->load->model('consulta_model');
        $data['titulo'] = 'buscarMensaje';

        $email = $this->input->post('email');
        $data['mensajes'] = $this->consulta_model->buscar_mensaje_email($email);

        $this->load->view('Plantillas/header');
        $this->load->view('Plantillas/vid-navbar-admin');
        $this->load->view('contenido/mensajes_admin_view', $data);
        $this->load->view('Plantillas/footer');
    }
}
