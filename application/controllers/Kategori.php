<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {
    
    function __construct(){
        parent::__construct();
        $this->load->model("M_Kategori");
        $this->load->library('form_validation');
        $this->load->helper('url');
		if($this->session->userdata('status') != 'login'){
				redirect(base_url(""));
		}
    }
    public function index()
    {
        $this->load->view("kategori");
    }
    public function getAll(){
        $data=$this->M_Kategori->ambil_data();
        echo json_encode($data);
    }
    public function add(){
        // $user = $this->M_User;
        // $validasi = $this->form_validation;
        // $validasi->set_rules($user->rule());

        // if($validasi->run()){
        //  $data=$user->save();
        //  $this->session->set_flasdata('success','Berhasil Disimpan');
        //  echo json_encode($data);
        $data=$this->M_Kategori->save();
        echo json_encode($data);
    }
    public function edit(){
        $data=$this->M_Kategori->update();
        echo json_encode($data);
    }
    public function hapus(){
        $data = $this->M_Kategori->delete();
        echo json_encode($data);
    }
    public function setCode(){
		$data = $this->M_Kategori->kode();
		echo json_encode($data);
	}
}
