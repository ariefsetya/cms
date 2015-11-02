<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class pos extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('pos');
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
		$this->load->helper('url');
		$this->load->helper('ckeditor');
		$this->load->view('header');
		$data['ckeditor'] = $this->_setup_ckeditor('content'); 
		$this->load->view('tambahpos',$data);
		$this->load->view('footer');
	}
	public function p()
	{
		$this->load->view('header');
		$this->load->view('lihatpos');
		$this->load->view('footer');
	}
	public function lihat()
	{
		$this->load->view('header');
		$this->load->view('lihatpos');
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

		$data['ckeditor'] = $this->_setup_ckeditor('content'); 
		$this->load->view('ubahpos',$data);
		$this->load->view('footer');
	}
	public function hapusgambar()
	{
		if($this->my->s()=="bukan"){
			$this->load->view('header');
			$this->load->view('nf');
			$this->load->view('footer');
			return;
		}
		$this->db->where('id',$this->uri->segment(3));
		$this->db->update('pos',array('pos_gambar'=>''));
		redirect(base_url()."pos");
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
		$this->load->view('hapuspos');
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
                'height'=> '500px'));
 
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
    		$this->db->delete('pos');
    		redirect(base_url("pos"));
    	}
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */