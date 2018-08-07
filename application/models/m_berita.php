<?php 
class M_berita extends CI_Model{

	function get_all_berita(){
		$hsl=$this->db->query("SELECT * FROM berita ORDER BY id DESC");
		return $hsl;
	}
	

}