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
		return $result;
	}
	function eliminar($id){
		$this->db->delete('alumnos',array('id'=>$id));
	}
	function obtener($id){
		$this -> db->where('id',$id);
		$result = $this->db->get("alumnos");
		return $result;
	}
	function actualizar($data,$id){
		$this->db->where('id',$id);
		$this->db->update('alumnos',array('nombre'=>$data['nombre'],'ciudad'=>$data['ciudad'],'edad'=>$data['edad']));

	}
}
?>