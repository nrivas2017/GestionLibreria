<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('Datos_model');
		$this->load->helper('url');
	}
	public function crearBoleta(){
		$this->load->view('headers');
		$this->load->view('boletas');
	}
	public function index()
	{
		$this->load->view('headers');
		$data= $this->Datos_model->mostrarDatos("productos");
		$this->load->view('welcome_message',$data);
	}
	public function nuevo(){
		$this->load->view('headers');
		$this->load->view('formulario');
	}

	public function eliminar(){
		$id = $this->uri->segment(3);
		$this->Datos_model->eliminarAlumno($id);
		redirect(base_url().'index.php/welcome','refresh');
	}
	public function editar(){
		$id = $this->uri->segment(3);
		$data= $this->Datos_model->obtenerAlumno($id);
		$this->load->view('headers');
		$this->load->view('formularioEditar',$data);
	}
	
}
