<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class My extends CI_Model{


	public function linkedmenu($parent,$tipe)
	{
	    $this->db->where('menu_parent',$parent);
	    $this->db->where('menu_tipe',$tipe);
	    $this->db->where('menu_aktif',1);
	    $this->db->order_by('menu_indeks','asc');
	    $a = $this->db->get('navigasi');
	    $menu = "";
	    if($a->num_rows()>0){
		    $a = $a->result_array();
		    foreach ($a as $key) {
		        
		    $menu .= '<li>';
		    $tambah = '';
		    if($this->linkedmenu($key['id'],$tipe)!=""){
		    	$tambah = 'class="dropdown-toggle"';
		    }
		        $menu .= '<a '.$tambah.' href="'.$key['menu_link'].'"><i class="'.$key['menu_icon'].'"></i> '.$key['menu_nama'].'</a>';
		        if($this->linkedmenu($key['id'],$tipe)!=""){
		        $menu .= "<ul class='dropdown-menu' data-role='dropdown'>".$this->linkedmenu($key['id'],$tipe)."</ul>";
		    	}
		    $menu .="</li>";
		    }
		}
	    return $menu;
	}
	public function treemenu($parent,$tipe)
	{
	    $this->db->where('menu_tipe',$tipe);
	    $this->db->where('menu_parent',$parent);
	    $this->db->order_by('menu_indeks','asc');
	    $a = $this->db->get('navigasi');
	    $menu = "<ul style='list-style-type:none;'>";
	    if($a->num_rows()>0){
		    $a = $a->result_array();
		    foreach ($a as $key) {
		        $menu .= '<li style="border-bottom:1px dotted #000;"><i class="icon-arrow-right-2"></i>  <a href="'.$key['menu_link'].'"><i class="'.$key['menu_icon'].'"></i> '.$key['menu_nama'].'</a> <span class="place-right"> ( <a href="'.base_url('navigasi/tambah/'.$key['id']).'"><i class="icon-plus"></i> Tambah Sub</a> |  <a href="'.base_url('navigasi/ubah/'.$key['id']).'"><i class="icon-pencil"></i> Ubah</a> | <a href="'.base_url('navigasi/hapus/'.$key['id']).'"><i class="icon-cancel"></i> Hapus</a> )</span></li>';
		        if($this->treemenu($key['id'],$tipe)!=""){
		        $menu .= "<ul>".$this->treemenu($key['id'],$tipe)."</ul>";
		    	}
		    }
		}
	    return $menu."</ul>";
	}
	public function init($value)
	{
		$a = str_replace(base_url(), "", $value);
		return base_url().$a;
	}
	public function s()
	{
		if($this->session->userdata('admin')==FALSE){
			return "bukan";
		}
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */