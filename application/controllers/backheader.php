<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Backheader extends CI_Controller {

	public function index()
	{
		if($this->my->s()=="bukan"){
			$this->load->view('header');
			$this->load->view('nf');
			$this->load->view('footer');
			return;
		}
		$this->load->view('header');
		$this->load->view('tamp_header');
		$this->load->view('footer');
	}
	public function save_foto($value='')
	{
		if($this->my->s()=="bukan"){
			$this->load->view('header');
			$this->load->view('nf');
			$this->load->view('footer');
			return;
		}
		if(isset($_FILES['header_back'])){
			if($_FILES['header_back']['tmp_name']!=""){
				$folder = $_FILES['header_back']['tmp_name'];
				$lokasi = "assets/img/".$_FILES['header_back']['name'];
				move_uploaded_file($folder,$lokasi);
				$data['header_back'] = base_url().$lokasi;
				$this->db->where('TYPEDATE','31');
				$this->db->update('web_init',$data);
			}
		}
		if(isset($_FILES['header_front'])){
			if($_FILES['header_front']['tmp_name']!=""){
				$folder = $_FILES['header_front']['tmp_name'];
				$lokasi = "assets/img/".$_FILES['header_front']['name'];
				move_uploaded_file($folder,$lokasi);
				$data['header_front'] = base_url().$lokasi;
				$this->db->where('TYPEDATE','31');
				$this->db->update('web_init',$data);
			}
		}
		if(isset($_FILES['backimage'])){
			if($_FILES['backimage']['tmp_name']!=""){
				$folder = $_FILES['backimage']['tmp_name'];
				$lokasi = "assets/img/".$_FILES['backimage']['name'];
				move_uploaded_file($folder,$lokasi);
				$data['backimage'] = base_url().$lokasi;
				$this->db->where('TYPEDATE','31');
				$this->db->update('web_init',$data);
			}
		}
		redirect(base_url("backheader"));
	}
	public function delete($value)
	{
		if($this->my->s()=="bukan"){
			$this->load->view('header');
			$this->load->view('nf');
			$this->load->view('footer');
			return;
		}
		$data[$value] = "";
		$this->db->where('TYPEDATE','31');
		$this->db->update('web_init',$data);
		redirect(base_url("backheader"));
	}
	public function website()
	{
		if($this->my->s()=="bukan"){
			$this->load->view('header');
			$this->load->view('nf');
			$this->load->view('footer');
			return;
		}
		$this->load->view('header');
		$this->load->view('website');
		$this->load->view('footer');
	}
	public function save_data()
	{
		if($this->my->s()=="bukan"){
			$this->load->view('header');
			$this->load->view('nf');
			$this->load->view('footer');
			return;
		}
		$a = $this->input->post();
		if($_FILES['favicon']['tmp_name']!=""){
			$folder = $_FILES['favicon']['tmp_name'];
			$lokasi = "assets/img/".$_FILES['favicon']['name'];
			move_uploaded_file($folder, $lokasi);
			$a['favicon'] = $this->my->init($lokasi);
		}
		if($_FILES['meta_og_image']['tmp_name']!=""){
			$folder = $_FILES['meta_og_image']['tmp_name'];
			$lokasi = "assets/img/".$_FILES['meta_og_image']['name'];
			move_uploaded_file($folder, $lokasi);
			$a['meta_og_image'] = $this->my->init($lokasi);
		}
		$this->db->where('TYPEDATE','31');
		$this->db->update('web_init',$a);
		redirect(base_url("backheader/website"));
	}
	public function save_footer_one()
	{
		if($this->my->s()=="bukan"){
			$this->load->view('header');
			$this->load->view('nf');
			$this->load->view('footer');
			return;
		}
		$a = $this->input->post();
		$this->db->where('TYPEDATE','31');
		$this->db->update('web_init',$a);
		redirect(base_url("backheader"));
	}
	public function save_footer_two()
	{
		if($this->my->s()=="bukan"){
			$this->load->view('header');
			$this->load->view('nf');
			$this->load->view('footer');
			return;
		}
		$a = $this->input->post();
		$this->db->where('TYPEDATE','31');
		$this->db->update('web_init',$a);
		redirect(base_url("backheader"));
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */