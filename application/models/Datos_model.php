<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Datos_Model extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	function crearDato($data){
		$this->db->insert('proveedor',array('nombre'=>$data['nombre'],'telefono'=>$data['telefono']));
	}
	function crearProducto($data){
		//Guarda datos de productos en tabla
		$this->db->insert('detalle_proveedor',array('id_proveedor' =>$data['id_proveedor'],'id_producto'=>$data['id_producto'],'cantidad'=>$data['cantidad'] ));

		//Obtiene stock actual
		$query=$this->db->query('Select stock from productos where id_producto='.$data['id_producto']); 
		foreach ($query->result() as $f) {
			$stock=$f->stock;
		}
		$total = $stock + $data['cantidad'];

		$query = $this->db->query('UPDATE productos set stock='.$total.' where id_producto='.$data['id_producto']);
	}
	function mostrarDatos($db){
		$result = $this->db->get($db);
		return $result;
	}
	function eliminar($id){
		$this->db->delete('alumnos',array('id'=>$id));
	}
	function obtener($id){
		$this ->db->where('id',$id);
		$result = $this->db->get("alumnos");
		return $result;
	}
	function actualizar($data,$id){
		$this->db->where('id',$id);
		$this->db->update('alumnos',array('nombre'=>$data['nombre'],'ciudad'=>$data['ciudad'],'edad'=>$data['edad']));
	}
	function fetch_data($query){
	 	$this->db->select("*");
	 	$this->db->from("cliente");
	 	if($query != ''){
	 		$this->db->like("id_cliente",$query);
	 		$this->db->or_like("rut",$query);
	 		$this->db->or_like("nombre",$query);
	 	}
	 	$this->db->order_by('id_cliente','DESC');
	 	return $this->db->get();
	 }
	function crear_Boleta($data){
		//busca id de cliente con rut
		$query=$this->db->query("SELECT * from cliente WHERE rut='".$data['rut']."'");

		foreach ($query->result() as $f) {
			$id_cliente = $f->id_cliente;
		}
		$fecha = date(' Y-m-j ');
		// crea factura o pregunta si existe 
		$query=$this->db->query("Select * from factura where id_cliente=".$id_cliente."and fecha='".$fecha."' and hora='".$data['hora']."'");
		$resultado =  $query->result();
	}
	//Busca un producto y muestra
	function buscaYmuestraDato($prod){
		$this->db->like('nombre',$prod['prod']);
		$result = $this->db->get('productos');
		return array('consulta'=> $result);
	}
}
?>