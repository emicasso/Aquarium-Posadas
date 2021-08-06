<?php

defined('BASEPATH') or exit('No direct scrpits access allowed');

class Ventas_controller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        
      
    }

    public function guardar_venta()
    {
        $this->load->model('ventas_model');
        $this->load->model('Producto_model');

        $encabezado_venta = array(
            'id_cliente' => $this->session->userdata('id_usuario'),
            'venta_fecha' => date('Y-m-d'),
        );
        $this->ventas_model->guardar_ventas($encabezado_venta);

        //obtiene el ultimo venta_id
        $venta_id = $this->db->insert_id();
        $cart = $this->cart->contents();

        foreach ($cart as $item) {
            $detalle_venta = array(
                'id_venta' => $venta_id,
                'producto_id' => $item['id'],
                'detalle_cantidad' => $item['qty'],
                'detalle_precio' => $item['price']
            );
            //controlar stock
            $productos = $this->Producto_model->select_producto_idd($item['id']);
            $soco = $productos->stock;
            if ($soco >= $item['qty']) {
                $soco = $soco - $item['qty'];
                $data = array(
                    'stock' => $soco
                );
                $this->Producto_model->actualizar_producto($data, $item['id']);
                $this->ventas_model->guardar_detalle_venta($detalle_venta);
            }
            echo "<script>alert('Su compra se regisrto correctamente, ¡Gracias!');</script>";
        }
        
        $this->cart->destroy();
        //mensaje de agradecimiento por la compra

        redirect('Proyecto_controller', 'refresh');
    }
}
