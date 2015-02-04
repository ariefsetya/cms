<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Alam extends CI_Controller {

	public function index()
	{
		if($this->my->s()=="bukan"){
			$this->load->view('header');
			$this->load->view('nf');
			$this->load->view('footer');
			return;
		}
		$this->load->view('header');
		$this->load->view('slideshow');
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
		$this->load->view('tambahslideshow');
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
		$this->load->view('ubahslideshow');
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
		$this->load->view('hapusslideshow');
		$this->load->view('footer');
	}
    public function del()
    {
    	if($this->my->s()=="bukan"){
			$this->load->view('header');
			$this->load->view('nf');
			$this->load->view('footer');
			return;
		}
    	if($this->input->post('id')!=""){
    		$this->db->where('id',$this->input->post('id'));
    		$a = $this->db->get('slideshow');
    		$a = $a->row_array();
    		try {
    			//unlink(str_replace("http://".$_SERVER['SERVER_NAME'], "",$a['slideshow_path']));
    		} catch (Exception $e) {
    			//unlink(str_replace("http://".$_SERVER['SERVER_NAME'], "",$a['slideshow_path']));
    		}
    		$this->db->where('id',$this->input->post('id'));
    		$this->db->delete('slideshow');
    		redirect(base_url("alam"));
    	}
    }
    public function save_slide()
    {

		if(isset($_FILES['slidefoto'])){

			$data['slideshow_idpengguna'] = $this->session->userdata('id');
			$folder = $_FILES['slidefoto']['tmp_name'];
			mkdir("assets/galeri/".date("Y"));
			mkdir("assets/galeri/".date("Y")."/".date("m"));
			mkdir("assets/galeri/".date("Y")."/".date("m")."/".date("d"));
			$lokasi = "assets/galeri/".date("Y")."/".date("m")."/".date("d")."/".$_FILES['slidefoto']['name'];
			move_uploaded_file($folder,$lokasi);
			$data['slideshow_path'] = base_url().$lokasi;
			$data['slideshow_tipe'] = $_FILES['slidefoto']['type'];
			$this->db->insert('slideshow',$data);
		}
		redirect(base_url("alam"));
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */