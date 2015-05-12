<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller { 
	
	function __construct() {
		parent::__construct();
		$this->load->model('model');		
	}

	public function index() {
		$this->load->view('headers/librerias');
		$this->load->view('principal');
		$this->load->view('footer');
	}

	public function agregar() {
		if ($this->tank_auth->is_logged_in()){
			$this->load->view('headers/librerias');
			$this->load->view('agregar');
			$this->load->view('footer');
		}else{
			echo "No tienes permisos para entrar";
		}
	}
public function agregarauto() {
		if ($this->tank_auth->is_logged_in()){
			$this->load->view('headers/librerias');
			$this->load->view('agregarauto');
			$this->load->view('footer');
		}else{
			echo "No tienes permisos para entrar";
		}
	}
	public function guardar() {
		$data = array(
			'nombre'   => $this->input->post('nombre',TRUE),
			'ciudad'      => $this->input->post('ciudad', TRUE),
			'fecha_arriendo' => date('Y/m/d h:m')
		);

		$this->model->guardar($data);
		redirect('main/agregar');
	}
	public function guardarauto() {
		$data = array(
			'marca'   => $this->input->post('marca',TRUE),
			'modelo'      => $this->input->post('modelo', TRUE),
			'anio'      => $this->input->post('anio', TRUE),
		);

		$this->model->guardarauto($data);
		redirect('main/agregarauto');
	}

	public function ver(){		
		$data = array(
			'enlaces' => $this->model->verTodo(),
			'dump'    => 0
		);

		$this->load->view('headers/librerias');
		$this->load->view('ver', $data);
		$this->load->view('footer');
	}
public function verauto(){		
		$data = array(
			'enlaces' => $this->model->verTodoauto(),
			'dump'    => 0
		);

		$this->load->view('headers/librerias');
		$this->load->view('verauto', $data);
		$this->load->view('footer');
	}

	public function buscar() {
		$data = array();

		$query = $this->input->get('query', TRUE);

		if ($query) {
			$result = $this->model->buscar(trim($query));
			$total = $this->model->totalResultados(trim($query));
			if ($result != FALSE){
				$data = array(
					'result' => $result,
					'total'  => $total
				);
			}else {
				$data = array('result' => '', 'total' => $total);
			}	
		}else{
			$data = array('result' => '', 'total' => 0);
		}

		$this->load->view('headers/librerias');
		$this->load->view('buscar', $data);
		$this->load->view('footer');
	}
	public function buscarauto() {
		$data = array();

		$query = $this->input->get('query', TRUE);

		if ($query) {
			$result = $this->model->buscarauto(trim($query));
			$total = $this->model->totalResultadosauto(trim($query));
			if ($result != FALSE){
				$data = array(
					'result' => $result,
					'total'  => $total
				);
			}else {
				$data = array('result' => '', 'total' => $total);
			}	
		}else{
			$data = array('result' => '', 'total' => 0);
		}

		$this->load->view('headers/librerias');
		$this->load->view('buscarauto', $data);
		$this->load->view('footer');
	}
	public function editar(){
	$id = $this->uri->segment(3);
	$obtenerEnlace = $this->model->obtenerEnlace($id);

        if ($obtenerEnlace != FALSE) {
        	foreach ($obtenerEnlace->result() as $row ) {
        		$nombre = $row->nombre;
        		$ciudad = $row->ciudad;
        	}
        	$data = array(
        		'id' => $id,
        		'nombre' => $nombre,
        		'ciudad' => $ciudad
        	);

        }else{
        	$data = '';
            return FALSE;
        }


	        $this->load->view('headers/librerias');
			$this->load->view('editar',$data);
			$this->load->view('footer');

}
public function editarauto(){
	$id = $this->uri->segment(3);
	$obtenerEnlaceauto = $this->model->obtenerEnlaceauto($id);

        if ($obtenerEnlaceauto != FALSE) {
        	foreach ($obtenerEnlaceauto->result() as $row ) {
        		$marca = $row->marca;
        		$modelo = $row->modelo;
        	}
        	$data = array(
        		'id' => $id,
        		'marca' => $marca,
        		'modelo' => $modelo
        	);

        }else{
        	$data = '';
            return FALSE;
        }


	        $this->load->view('headers/librerias');
			$this->load->view('editarauto',$data);
			$this->load->view('footer');

}
function editarEnlace(){
	$id = $this->uri->segment(3);
	$data = array(
'nombre' => $this->input->post('nombre',true),
'ciudad' => $this->input->post('ciudad',true)
		);
	$this->model->editarEnlace($id,$data);
	redirect('main/ver');
}
function editarEnlaceauto(){
	$id = $this->uri->segment(3);
	$data = array(
'marca' => $this->input->post('marca',true),
'modelo' => $this->input->post('modelo',true)

		);
	$this->model->editarEnlaceauto($id,$data);
	redirect('main/verauto');
}
	public function eliminar(){	
		$this->load->model('model');
		$id = $this->uri->segment(3);
		if ($id){
			$this->model->eliminarId($id);
			redirect('main/ver');
		}
		
	}
	public function eliminarauto(){	
		$this->load->model('model');
		$id = $this->uri->segment(3);
		if ($id){
			$this->model->eliminarIdauto($id);
			redirect('main/verauto');
		}
		
	}
	public function validaciones(){
		$this->load->view('headers/librerias');
		$this->load->view('validaciones');
		$this->load->view('footer');
	}
}

/* End of file main.php */
/* Location: ./application/controllers/main.php */