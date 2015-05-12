<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class model extends CI_Model { 

	function __construct() {
    parent::__construct();
  }

  function guardar($data){
  	$this->db->insert('clientes', $data);
  }
  function guardarauto($data){
    $this->db->insert('automoviles', $data);
  }

  function verTodo($limite = 0){
  	$query = $this->db->get('clientes');
  	if ($query->num_rows() > 0){
  		return $query;
  	}else{
  		return FALSE;
  	}
  }
  function verTodoauto($limite = 0){
    $query = $this->db->get('automoviles');
    if ($query->num_rows() > 0){
      return $query;
    }else{
      return FALSE;
    }
  }

  function buscar($query) {
    $this->db->like('nombre', $query);
    $this->db->or_like('ciudad', $query);
    $query = $this->db->get('clientes');
    if ($query->num_rows() > 0){
      return $query;
    }else{
      return FALSE;
    }
  }
  function buscarauto($query) {
    $this->db->like('marca', $query);
    $this->db->or_like('modelo', $query);
    $query = $this->db->get('automoviles');
    if ($query->num_rows() > 0){
      return $query;
    }else{
      return FALSE;
    }
  }

  function eliminarId($id){
    $this->db->where('id', $id);
    $this->db->delete('clientes');
  }
  function eliminarIdauto($id){
    $this->db->where('id', $id);
    $this->db->delete('automoviles');
  }

  function totalResultados($query){
    $this->db->like('nombre', $query);
    $this->db->or_like('ciudad', $query);
    $query = $this->db->get('clientes');
    return $query->num_rows();
  }

  function totalResultadosauto($query){
    $this->db->like('marca', $query);
    $this->db->or_like('modelo', $query);
    $query = $this->db->get('automoviles');
    return $query->num_rows();
  }
function obtenerEnlace($id){
  $this->db->where('id', $id); 
  $query = $this->db->get('clientes');
  if ($query->num_rows() > 0) {
    return $query;
   }else{
    return FALSE;
  }
 

}
function obtenerEnlaceauto($id){
  $this->db->where('id', $id); 
  $query = $this->db->get('automoviles');
  if ($query->num_rows() > 0) {
    return $query;
   }else{
    return FALSE;
  }
 

}
function editarEnlace($id,$data){
  $this->db->where('id',$id);
  $this->db->update('clientes',$data);

}
function editarEnlaceauto($id,$data){
  $this->db->where('id',$id);
  $this->db->update('automoviles',$data);

}
	
}