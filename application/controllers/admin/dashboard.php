<?php
class Dashboard extends CI_Controller{
	function __construct(){
		parent:: __construct();

		if($this->session->userdata('masuk') != TRUE){
			$url = BASE_URL('administrator');
			redirect($url);
		}
	}

	function index(){
		$this->load->view('v_dashboard');
	}

}