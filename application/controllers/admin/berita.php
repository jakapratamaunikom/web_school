<?php
class Berita extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model('m_berita');

	}

	function index(){
		$query['data'] = $this->m_berita->get_all_berita();
		$this->load->view('admin/v_berita', $query);

	}
}