<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Kategori extends CI_Model {
    // deklarasi variable
    private $_table = "kategori";
    public $id_kategori;
    public $nama_kategori;
    public $deskripsi_kategori;

    //menampilkan data
    public function rule(){
        return[
            [`field` => `id_kategori+`,
            `rules` => `required`],
            [`field` => `nama_kategori`,
            `rules` => `required`],
        ];
    }

    //kode
    public function kode()
     {
          $this->db->select('RIGHT(kategori.id_kategori, 4) as id_kategori', FALSE);
          $this->db->order_by('id_kategori', 'DESC');
          $this->db->limit(1);
          $query = $this->db->get('kategori');  //cek dulu apakah ada sudah ada kode di tabel.    
          if ($query->num_rows() <> 0) {
               //cek kode jika telah tersedia    
               $data = $query->row();
               $kode = intval($data->id_kategori) + 1;
          } else {
               $kode = 1;  //cek jika kode belum terdapat pada table
          }
          $batas = str_pad($kode, 4, "0", STR_PAD_LEFT);
          $kodetampil = "K".$batas; //format kode
          return $kodetampil;
         
     }

    //menampilkan data
    public function ambil_data(){
        return $this->db->get($this->_table)->result();
    }

   //create
    public function save(){
//         $config['upload_path']          = realpath(APPPATH. '../upload/');
//     $config['allowed_types']        = 'gif|jpg|png|jpeg';
//     $config['overwrite']            = true;
//     $config['max_size']             = 1024; // 1MB
//     // $config['max_width']            = 1024;
//     // $config['max_height']           = 768;

//     $this->load->library('upload', $config);
//     if(!$this->upload->do_upload('gambar')) {
//             echo $this->upload->display_errors();
//     } else {
//                 $filename= $this->upload->data('file_name');
              
//         }
            $post = $this->input->post();
        $this->id_kategori = $post["id_kategori_add"];
        $this->nama_kategori = $post["nama_kategori"];
        $this->deskripsi_kategori = $post["deskripsi_kategori"];
        
        $result = $this->db->insert($this->_table,$this);

    }
    //Update data
    public function update(){
//                 $config['upload_path']          = realpath(APPPATH. '../upload/');
//     $config['allowed_types']        = 'gif|jpg|png';
//     $config['overwrite']            = true;
//     $config['max_size']             = 1024; // 1MB
//     // $config['max_width']            = 1024;
//     // $config['max_height']           = 768;

//     $this->load->library('upload', $config);
//     if(!$this->upload->do_upload('gambar')) {
//             echo $this->upload->display_errors();
//     } else {
        
//     }
            $post = $this->input->post();
        $this->id_kategori = $post["id_kategori"];
        $this->nama_kategori = $post["nama_kategori"];
        $this->deskripsi_kategori = $post["deskripsi_kategori"];

        $this->db->update($this->_table, $this, array('id_kategori'=>$post['id_kategori']));
        
        }
    //Delete
    public function delete(){
        // return $this->db->delete($this->_table, array("id_user"=> $id_user));
        $id_kategori = $this->input->post('id_kategori');
        $this->db->where('id_kategori', $id_kategori);
        $result = $this->db->delete('kategori');
        return $result;
    }

//     private function _uploadImage()
//     {
//         $config['upload_path']          = './upload/product/';
//         $config['allowed_types']        = 'gif|jpg|png';
//         $config['file_name']            = $this->id_barang;
//         $config['overwrite']            = true;
//         $config['max_size']             = 1024; // 1MB
//         // $config['max_width']            = 1024;
//         // $config['max_height']           = 768;

//         $this->load->library('upload', $config);

//         if ($this->upload->do_upload('gambar')) {
//             return $this->upload->data("file_name");
//         }
        
//         return "default.jpg";

//     }

}