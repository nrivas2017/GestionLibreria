<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('Datos_model');
		$this->load->helper('url');
	}
	public function index()
	{
		$this->load->view('headers');
		$this->load->view('barra_nav');
		$data= $this->Datos_model->mostrarDatos();
		$this->load->view('cliente');
		$this->load->view('footer');
	}
	public function addCliente(){
		$this->load->view('headers');
		$this->load->view('barra_nav');
		$this->load->view('formulario_añadirClientes');
		$this->load->view('footer');
	}
	public function recibirdatos(){
		$data = array(
			'nombre'=> $this->input->post('nombre'),
			'rut'=> $this->input->post('rut')
		);
		$this->Datos_model->añadirCliente($data);
		echo '<script> alert("Datos Ingresados Correctamente "); </script>';
		redirect(base_url().'index.php/Cliente/addCliente','refresh');

	}
}
