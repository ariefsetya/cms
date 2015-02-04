<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Masuk extends CI_Controller {

	public function cekmasuk()
	{
		$data['pengguna_email'] = $this->input->post('login');
		$data['pengguna_katasandi'] = md5($this->input->post('password'));
		$data['pengguna_aktif'] = 1;
		$this->db->where($data);
		$a = $this->db->get('pengguna');
		if($a->num_rows()>0){
			$this->session->set_userdata('admin',TRUE);
			$a = $a->row_array();
			$this->session->set_userdata('id',$a['id']);
			$this->session->set_userdata('namalengkap',$a['pengguna_namadepan']." ".$a['pengguna_namabelakang']);
			redirect(base_url());
		}else{
			redirect(base_url()."pos/".date("ymdHisiymdsymdHisiymdsymdHisiymds"));
		}
	}
	public function cekkeluar()
	{
		$this->session->set_userdata('namalengkap','');
		$this->session->set_userdata('admin',FALSE);
		redirect(base_url());
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */