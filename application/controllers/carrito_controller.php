<?php

defined('BASEPATH') or exit('No direct scrpits access allowed');

class carrito_controller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function ver_carrito()
    {
        if (!$this->cart->contents()) {
            $data['message'] = 'Tu carrito está vacío';
            $data['message2'] = '¿No sabés qué comprar? ¡Miles de productos te esperan!';
        } else {
            $data['message'] = '';
            $data['message2'] = '';
        }
        $this->load->view('Plantillas/header');
		$this->load->view('Plantillas/vid-navbar');
        $this->load->view('carrito/carrito_view', $data);
        $this->load->view('Plantillas/footer');
    }

    public function agregar_carrito()
    {
        $data = array(
            'id' => $this->input->post('id'),
            'name' => $this->input->post('nombre'),
            'price' => $this->input->post('precio'),
            'qty' => 1
        );
        $this->cart->insert($data);
        echo "<script>alert('Se agrego a su carrito!');</script>";
        redirect('Productos', 'refresh');
    }

    public function borrar($id)
    {
        if ($id == "all") {
            $this->cart->destroy();
        } else {
            $data = array(
                'rowid' => $id,
                'qty' => 0
            );
            $this->cart->update($data);
        }
        redirect('carrito_controller/ver_carrito');
    }
}
