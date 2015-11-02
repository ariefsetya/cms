<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Galeri extends CI_Controller {

	public function index()
	{
		if($this->my->s()=="bukan"){
			$this->load->view('header');
			$this->load->view('galeriuser');
			$this->load->view('footer');
			return;
		}
		$this->load->view('header');
		$this->load->view('galeri');
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
		$data['ckeditor'] = $this->_setup_ckeditor('content'); 
		$this->load->view('header');
		$this->load->view('tambahgaleri',$data);
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
		$this->load->view('ubahgaleri');
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
		$this->load->view('hapusgaleri');
		$this->load->view('footer');
	}
	public function lihat()
	{
		if($this->my->s()=="bukan"){
			$this->load->view('header');
			$this->load->view('nf');
			$this->load->view('footer');
			return;
		}
		$this->load->view('header');
		$this->load->view('lihatgaleri');
		$this->load->view('footer');
	}

	private function _setup_ckeditor($id)
    {
    	if($this->my->s()=="bukan"){
			$this->load->view('header');
			$this->load->view('nf');
			$this->load->view('footer');
			return;
		}
        $ckeditor = array(
            'id' => $id,
            'path' => 'assets/js/ckeditor',
            'config' => array(
                'toolbar' => 'standard',
                'width' => '100%',
                'height'=> '200px'));
 
        return $ckeditor;
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
    		$a = $this->db->get('galeri');
    		$a = $a->row_array();
    		try {
    			//unlink(str_replace("http://".$_SERVER['SERVER_NAME'], "",$a['galeri_path']));
    		} catch (Exception $e) {
    			//unlink(str_replace("http://".$_SERVER['SERVER_NAME'], "",$a['galeri_path']));
    		}
    		$this->db->where('id',$this->input->post('id'));
    		$this->db->delete('galeri');
    		redirect(base_url("galeri"));
    	}
    }
    public function aktifss($id=0)
    {
    	if($id==0){
    		redirect(base_url("galeri"));
    	}else{
    		$data['galeri_ss'] = 1;
    		$this->db->where('id',$id);
    		$this->db->update('galeri',$data);
    		redirect(base_url("galeri"));
    	}
    }
    public function nonaktifss($id=0)
    {
    	if($id==0){
    		redirect(base_url("galeri"));
    	}else{
    		$data['galeri_ss'] = 0;
    		$this->db->where('id',$id);
    		$this->db->update('galeri',$data);
    		redirect(base_url("galeri"));
    	}
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */