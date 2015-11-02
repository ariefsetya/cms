<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function index()
	{
		if($this->my->s()=="bukan"){
			$this->load->view('header');
			$this->load->view('nf');
			$this->load->view('footer');
			return;
		}
		$this->load->view('header');
		$this->load->view('kategori');
		$this->load->view('footer');
	}
	public function tambah()
	{
		if($this->my->s()=="bukan"){
			$this->load->view('header');
			$this->load->view('nf');
			$this->load->view('footer');
			return;
		}
		$this->load->view('header');
		$this->load->view('tambahkategori');
		$this->load->view('footer');
	}
	public function ubah()
	{
		if($this->my->s()=="bukan"){
			$this->load->view('header');
			$this->load->view('nf');
			$this->load->view('footer');
			return;
		}
		$this->load->view('header');
		$this->load->view('ubahkategori');
		$this->load->view('footer');
	}
	public function hapus()
	{
		if($this->my->s()=="bukan"){
			$this->load->view('header');
			$this->load->view('nf');
			$this->load->view('footer');
			return;
		}
		$this->load->view('header');
		$this->load->view('hapuskategori');
		$this->load->view('footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */