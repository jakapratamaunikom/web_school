<?php
class M_login extends CI_Model{
	function cekLogin($username, $password){
		$hasil = $this->db->query("SELECT * FROM pengguna WHERE username='$username' AND password = md5('$password') ");
		return $hasil;

	}
}