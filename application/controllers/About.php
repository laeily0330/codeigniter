<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$data = array(
			'nim' => "1541180030", 
			'nama' => "Nadhifatul Laeily",
			'email' => "lely0330@gmail.com",
			'telp' => "089649798348",
			'addr' => "Jl. Randuagung RT1/RW5 Singosari Malang",
			'inst' => "Politeknik Negeri Malang",
			'major' => "D4 Teknik Informatika",
			'hobby' => "Lihat oppa ganteng, ngerjakan tugas T_T",
			'ket' => "Blog kehidupan susah senang mahasiswa :')"
		);
		$this->load->view('about', $data);
	}

}

/* End of file About.php */
/* Location: ./application/controllers/About.php */
?>