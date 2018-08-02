<?php
/*---------CARGA DE VISTA DE LAS INICIO-----------*/
	class Inicio extends CI_Controller {
		public function index(){
			$data['titulo'] = 'IAPPEF';
			$this->load->view("Plantilla/header", $data);
			$this->load->view("Inicio_intraiappef/intraiappef");
			$this->load->view("Plantilla/Footer");
		}
	}
?>

