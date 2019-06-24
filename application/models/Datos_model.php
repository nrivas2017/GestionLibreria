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
		#----------------------------------------------------------------------------------

		$date = date('Y-m-d');
		// crea factura o pregunta si existe 
		$query=$this->db->query("Select * from factura where id_cliente='".$id_cliente."' and fecha='".$date."' and hora= '".$data['hora']."'");
		//Si no existen columnas agrega y si existen agrega en tabla detalle
		if($query->num_rows() == 0 ){
			 $this->db->insert("factura",array('id_cliente' =>$id_cliente,'fecha'=>$date,'hora'=>$data['hora']));
			
			 $this->db->select_max('id_factura');
			 $resu = $this->db->get('factura');

			 foreach ($resu->result() as $f) {
			 	$id_factura = $f->id_factura;
			 }

			 $this->db->insert("detalle",array('id_factura'=> $id_factura ,'id_producto'=>$data['id_producto'],'cantidad'=>$data['cantidad'],'precio'=>$data['precio']));			
			
		}else{
			 $this->db->select_max('id_factura');
			 $resu = $this->db->get('factura');

			 foreach ($resu->result() as $f) {
			 	$id_factura = $f->id_factura;
			 }

			 $this->db->insert("detalle",array('id_factura'=> $id_factura ,'id_producto'=>$data['id_producto'],'cantidad'=>$data['cantidad'],'precio'=>$data['precio']));
		}
		

	}
	//Busca un producto y muestra
	function buscaYmuestraDato($prod){
		$this->db->like('nombre',$prod['prod']);
		$result = $this->db->get('productos');
		return array('consulta'=> $result);
	}

	function buscarFactura(){
		$this->db->select('*');
		$this->db->from('factura');
		$this->db->join('cliente', 'factura.id_cliente = cliente.id_cliente');
		$this->db->join('detalle', 'factura.id_factura = detalle.id_factura');
		$this->db->join('productos','detalle.id_producto = productos.id_producto');
		$result = $this->db->get();
		return $result;
	}
}
?>