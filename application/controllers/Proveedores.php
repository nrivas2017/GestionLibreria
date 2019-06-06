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
		redirect(base_url(),'refresh');
		//$this->load->view('headers');
		//$this->load->view('barra_nav');
		////$data= $this->Datos_model->mostrarDatos();
		//$this->load->view('footer');
	}
	public function showProductos(){
		$this->load->view('headers');
		$this->load->view('barra_nav');
		$data= $this->Datos_model->mostrarDatos("productos");
		$this->load->view('productos',$data);
		$this->load->view('footer');
	}
	public function showDetalle(){
		$this->load->view('headers');
		$this->load->view('barra_nav');
		$this->load->view('proveedor');
		$this->load->view('footer');
	}
	public function showVenta(){
		$this->load->view('headers');
		$this->load->view('barra_nav');
		$data= $this->Datos_model->mostrarDatos("productos");
		$this->load->view('venta',$data);
		$this->load->view('footer');
	}
	public function addProveedor(){
		$this->load->view('headers');
		$this->load->view('barra_nav');
		$this->load->view('formulario_añadirProveedores');
		$this->load->view('footer');
	}

	public function addProducto(){
		$this->load->view('headers');
		$this->load->view('barra_nav');
		$data=$this->Datos_model->mostrarDatos('detalle_proveedor');
		$this->load->view('formulario_añadirProductos',$data);
		$this->load->view('footer');
	}
	public function searchProducto(){
		$this->load->view('headers');
		$this->load->view('barra_nav');
		$prod = array(
			'prod'=> $this->input->post('nombre')
		);
		$data= $this->Datos_model->buscaYmuestraDato($prod);
		$this->load->view('productos',$data);
		$this->load->view('footer');
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
	public function recibirdatosventa(){
		$data = array(
			'id'=> $this->input->post('id'),
			'nombre'=> $this->input->post('nombre'),
			'precio'=> $this->input->post('precio'),
			'cantidad'=> $this->input->post('stock')-$this->input->post('cantidad')
		);//Stock en BD - Cantidad seleccionada
		//echo "<script> alert('ID =".$data['id']."      NOMBRE =".$data['nombre']."       PRECIO =".$data['precio']."     CANTIDAD =".$data['cantidad']."'); </script>";
		$this->Datos_model->actualizarProducto($data);
		//echo '<script> alert("Datos Ingresados Correctamente "); </script>';
		redirect(base_url().'proveedores','refresh');

	}
}
