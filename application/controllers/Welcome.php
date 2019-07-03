<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('Datos_model');
		$this->load->helper('url');
	}
	public function guardarBoleta(){
		$data = array(
			'id_producto' => $this->input->post("id_producto"), 
			'cantidad'   => $this->input->post("cantidad"),
			'precio'     => $this->input->post("precio"),
			'rut'        =>$this->input->post("rut_cliente"),
			'hora'       =>$this->input->post("hora")
		);
		$datos = $this->Datos_model->crear_Boleta($data);
		
	}
	public function eliminarCliente(){
		$data = array('id_cliente'=> $this->input->post('id_cliente'));
		$this->Datos_model->eliminarCliente($data);
	}
	public function editarProducto(){
		$data=array(
			'id_producto' => $this->input->post("id_producto"),
			'nombre' 	=> $this->input->post("nombre"),
			'stock'   => $this->input->post("stock"),
			'precio_unitario'     => $this->input->post("precio_unitario"),

		);
		$this->Datos_model->editarProducto($data);

	}
	public function editarCliente(){
		$data=array(
			'id_cliente' => $this->input->post("id_cliente"),
			'rut' 	=> $this->input->post("rut"),
			'nombre'   => $this->input->post("nombre")
		);
		$this->Datos_model->editarCliente($data);

	}
	public function editarProveedor(){
		$data=array(
			'id_proveedor' => $this->input->post("id_proveedor"),
			'nombre' 	=> $this->input->post("nombre"),
			'telefono'   => $this->input->post("telefono")
		);
		$this->Datos_model->editarProveedor($data);
	}

	public function index(){
		$this->load->view('headers');
		$this->load->view('barra_nav');
		$this->load->view('inicio');
		$this->load->view('footer');
	}
	public function ventaProductos(){
		$this->load->view('headers');
		$data['consulta']= $this->Datos_model->mostrarDatos("productos");
		$this->load->view('barra_nav');
		$this->load->view('welcome_message',$data);
		$this->load->view('footer');
	}
	public function productos(){
		$this->load->view('headers');
		$data['consulta']= $this->Datos_model->mostrarDatos("productos");
		$this->load->view('barra_nav');
		$this->load->view('productos',$data);
		$this->load->view('footer');
	}
	public function proveedores(){
		$this->load->view('headers');
		$data['consulta']= $this->Datos_model->mostrarDatos("proveedor");
		$this->load->view('barra_nav');
		$this->load->view('proveedor',$data);
		$this->load->view('footer');
	}
	public function clientes(){
		$this->load->view('headers');
		$data['consulta']= $this->Datos_model->mostrarDatos("cliente");
		$this->load->view('barra_nav');
		$this->load->view('cliente',$data);
		$this->load->view('footer');
	}
	public function facturas(){
		$this->load->view('headers');
		$data['consulta']= $this->Datos_model->buscarFactura();
		$this->load->view('barra_nav');

		$this->load->view('facturas',$data);
		$this->load->view('footer');
	}
	public function nuevo(){
		$this->load->view('headers');
		$this->load->view('barra_nav');
		$this->load->view('formulario');
		$this->load->view('footer');
	}
	public function fetch(){
		$output =array();
		$query = '';
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
			$output='<p>Rut:'.$row->rut.'</p>';
		}
		if($output != ''){
			echo $output;
		}
	}
}
