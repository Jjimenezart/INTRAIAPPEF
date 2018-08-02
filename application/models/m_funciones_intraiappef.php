<?php
// CARGA DEL MODULADO DE LA INTRANAVE
	defined('BASEPATH') OR exit('No direct script access allowed');
		class M_funciones_intranave extends CI_Model {
 			public function __construct(){
				parent::__construct();
				$this->load->database();
			}

