<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hubungi extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('hubungi');
		$this->load->view('footer');
	}
	public function sukses()
	{
		$this->load->view('header');
		$this->load->view('hubungi');
		$this->load->view('footer');
	}

	public function kirim()
	{
		$data = $this->input->post();
		$data['pesan_isi'] = htmlspecialchars($data['pesan_isi']);
		$data['pesan_nama'] = htmlspecialchars($data['pesan_nama']);
		$data['pesan_email'] = htmlspecialchars($data['pesan_email']);
		$data['pesan_perihal'] = htmlspecialchars($data['pesan_perihal']);
		$data['pesan_tanggal'] = date("Y-m-d");
		$data['pesan_jam'] = date("H:i:s");
		$data['pesan_baca'] = 0;
		$this->db->insert('pesan',$data);
		redirect(base_url()."hubungi/sukses");
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */