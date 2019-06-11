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
		$data = $this->input->post('id_producto');
		$this->load->view('headers');
		$this->load->view('boletas',$data);
	}
	public function index()
	{
		$this->load->view('headers');
		$data['consulta']= $this->Datos_model->mostrarDatos("productos");
		$this->load->view('welcome_message',$data);
	}
	public function nuevo(){
		$this->load->view('headers');
		$this->load->view('formulario');
	}
	public function fetch(){
		$output =array();
		$query = '';
		$this->load->model('Datos_model');
		if($this->input->post('query'))
		{
			$query = $this->input->post('query');
		}
		$data = $this->Datos_model->fetch_data($query);

		foreach ($data->result() as $row) {
			$output .= '<option>'.$row->nombre.'<option>';
		}
		echo $output;
	}
	public function fetch2(){
		$output =array();
		$query = '';
		$this->load->model('Datos_model');
		if($this->input->post('query2'))
		{
			$query = $this->input->post('query2');
		}
		$data = $this->Datos_model->fetch_data($query);
		foreach ($data->result() as $row) {
			$output= '<p>Rut: '.$row->rut.'<p>';
		}
		if($output != ''){
			echo $output;
		}else{
			echo "<p> Rut : No encontrado </p>";
		}
		
	}
}
