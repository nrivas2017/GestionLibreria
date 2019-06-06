<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proveedores extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('Datos_model');
		$this->load->helper('url');
	}
	public function index()
	{
		$this->load->view('headers');
		//$data= $this->Datos_model->mostrarDatos();
		$this->load->view('proveedor');
	}
	public function addProveedor(){
		$this->load->view('headers');
		$this->load->view('formulario_añadirProveedores');
	}

	public function addProducto(){
		$this->load->view('headers');
		$data=$this->Datos_model->mostrarDatos('detalle_proveedor');
		$this->load->view('formulario_añadirProductos',$data);
	}
	// Interactua con DB
	public function recibirdatos(){
		$data = array(
			'nombre'=> $this->input->post('nombre'),
			'telefono'=> $this->input->post('telefono')
		);
		$this->Datos_model->crearDato($data);
		echo '<script> alert("Datos Ingresados Correctamente "); </script>';
		redirect(base_url().'proveedores','refresh');

	}
}
