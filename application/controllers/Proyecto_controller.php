<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Proyecto_controller extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('producto_model');
		$data['producto'] = $this->producto_model->select_producto();
		$data['titulo'] = 'Principal';
		$this->load->view('Plantillas/header', $data);
		$this->load->view('Plantillas/navbar-princ');
		$this->load->view('contenido/principal');
		$this->load->view('Plantillas/footer');
	}

	public function nosotros()
	{
		$data['titulo'] = 'contacto';
		$this->load->view('Plantillas/header', $data);
		$this->load->view('Plantillas/vid-navbar');
		$this->load->view('contenido/aboutus');
		$this->load->view('Plantillas/footer');
	}

	public function productos()
	{

		$this->load->model('producto_model');
		$data['producto'] = $this->producto_model->get_producto();;

		$this->load->view('Plantillas/header', $data);
		$this->load->view('Plantillas/vid-navbar');
		$this->load->view('Productos/catalogo_productos');
		$this->load->view('Plantillas/footer');
	}

	public function prodPag2()
	{
		$this->load->view('Plantillas/header');
		$this->load->view('Plantillas/vid-navbar');
		$this->load->view('contenido/page/2');
		$this->load->view('Plantillas/footer');
	}

	public function prodPag3()
	{
		$this->load->view('Plantillas/header');
		$this->load->view('Plantillas/vid-navbar');
		$this->load->view('contenido/page/3');
		$this->load->view('Plantillas/footer');
	}

	public function contacto()
	{
		$this->load->model('consulta_model');
		$data['titulo'] = 'Mensajes';

		$this->load->view('Plantillas/header', $data);
		$this->load->view('Plantillas/vid-navbar');
		$this->load->view('contenido/contacto');
		$this->load->view('Plantillas/footer');
	}

	public function servicios()
	{
		$this->load->view('Plantillas/header');
		$this->load->view('Plantillas/vid-navbar');
		$this->load->view('contenido/servicios');
		$this->load->view('Plantillas/footer');
	}

	public function galeria()
	{
		$this->load->view('Plantillas/header');
		$this->load->view('Plantillas/vid-navbar');
		$this->load->view('contenido/trabajos');
		$this->load->view('Plantillas/footer');
	}

	public function blog()
	{
		$this->load->view('Plantillas/header');
		$this->load->view('Plantillas/vid-navbar');
		$this->load->view('contenido/blog');
		$this->load->view('Plantillas/footer');
	}

	public function vivarium()
	{
		$this->load->view('Plantillas/header');
		$this->load->view('Plantillas/vid-navbar');
		$this->load->view('contenido/vivarium');
		$this->load->view('Plantillas/footer');
	}

	public function termycond()
	{
		$this->load->view('Plantillas/header');
		$this->load->view('Plantillas/vid-navbar');
		$this->load->view('contenido/termycond');
		$this->load->view('Plantillas/footer');
	}

	public function pagos()
	{
		$this->load->view('Plantillas/header');
		$this->load->view('Plantillas/vid-navbar');
		$this->load->view('contenido/pagos');
		$this->load->view('Plantillas/footer');
	}

	public function preguntas()
	{
		$this->load->view('Plantillas/header');
		$this->load->view('Plantillas/vid-navbar');
		$this->load->view('contenido/preguntas');
		$this->load->view('Plantillas/footer');
	}

	public function catalogo($vari)
	{

		$data['titulo'] = 'Catalogo';
		$this->load->model('producto_model');
		$data['producto'] = $this->producto_model->get_producto();;

		$this->load->view('Plantillas/header', $data);

		if ($vari == 0) {
			$this->load->view('Plantillas/vid-navbar');
			$this->load->view('Productos/catalogo_productos-admin');
		} else {
			if ($vari == 2) {
				$this->load->view('Plantillas/vid-navbar-admin');
				$this->load->view('Productos/catalogo_productos-admin');
			} else {
				$this->load->view('Plantillas/vid-navbar');
				$this->load->view('Productos/catalogo_productos');
			}
		}
		$this->load->view('Plantillas/footer');
	}
}
