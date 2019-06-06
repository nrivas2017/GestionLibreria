<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Datos_Model extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	function crearDato($data){
		$this->db->insert('detalle_proveedor',array('nombre'=>$data['nombre'],'telefono'=>$data['telefono']));
	}
	function mostrarDatos($db){
		$result = $this->db->get($db);
		return array('consulta'=> $result);
	}
	function eliminarAlumno($id){
		$this->db->delete('alumnos',array('id'=>$id));
	}
	function obtenerAlumno($id){
		$this -> db->where('id',$id);
		$query = $this->db->get("alumnos");
		return array('consulta'=> $query);
	}
	function actualizarAlumno($data,$id){
		$this->db->where('id',$id);
		$this->db->update('alumnos',array('nombre'=>$data['nombre'],'ciudad'=>$data['ciudad'],'edad'=>$data['edad']));

	}
	//----------------NUEVA VENTA---------------
	function actualizarProducto($data){
		$this->db->where('id_producto',$data['id']);
		$this->db->update('productos',array('stock'=>$data['cantidad']));

	}
	//Busca un producto y muestra
	function buscaYmuestraDato($prod){
		$this->db->like('nombre',$prod['prod']);
		$result = $this->db->get('productos');
		return array('consulta'=> $result);
	}
}
?>