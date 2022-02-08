<?php

class Pelajar extends CI_Controller {
     public function __construct()
     {
       parent::__construct();
       $this->load->model('Pelajar_model');
       $this->load->library('form_validation');
     }
        

    public function index()
    {
        $data['judul'] = "daftar Pelajar";
        $data['Pelajar'] = $this->Pelajar_model->getAllpelajar();
        if( $this->input->post('keyword') ) {
            $data['Pelajar'] = $this->Pelajar_model->cariDataPelajar();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('Pelajar/index', $data);
        $this->load->view('templates/footer');
    }

     public function tambah()
     {
         $data['judul'] = "form tambah data pelajar";

         $this->form_validation->set_rules('nama', 'Nama', 'required');
         $this->form_validation->set_rules('nrp', 'NRP', 'required|numeric');
         $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
         if( $this->form_validation->run()== FALSE){
             $this->load->view('templates/header', $data);
             $this->load->view('pelajar/tambah');
             $this->load->view('templates/footer');
        }else {
            $this->pelajar_model->TambahDataPelajar();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('Pelajar');
        }
             
    }
       public function hapus($id)
       {
           $this->pelajar_model->hapusDatapelajar($id);
           $this->session->set_flashdata('flash', 'dihapus');
           redirect('pelajar');
       }


   public function detail($id)
   {
       $data['judul'] = 'Detail Data Pelajar';
       $data['pelajar']= $this->Pelajar_model->getPelajarById($id);
       $this->load->view('templates/header', $data);
       $this->load->view('pelajar/detail'  , $data);
       $this->load->view('templates/footer');           
   }

   public function ubah($id)
   {
       $data['judul'] = "form ubah data pelajar";
       $data['pelajar'] = $this->Pelajar_model->getPelajarById($id); 
       $data['jurusan'] = ['multimedia', 'rekayasa perangkat lunak' , 'teknik komputer dan jaringan' , 'tata busana', 'otomatif', 'kayu'];

       $this->form_validation->set_rules('nama', 'Nama', 'required');
       $this->form_validation->set_rules('nrp', 'NRP', 'required|numeric');
       $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

       if( $this->form_validation->run()== FALSE){
           $this->load->view('templates/header', $data);
           $this->load->view('Pelajar/ubah' , $data);
           $this->load->view('templates/footer');
      }else {
          $this->Pelajar_model->UbahDataPelajar();
          $this->session->set_flashdata('flash', 'Diubah');
          redirect('Pelajar');
      }
           
  }



} 