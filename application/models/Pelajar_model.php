<?php

class Pelajar_model extends CI_model {
    public function getAllpelajar()
    {
       return  $this->db->get('pelajar')->result_array();
    }

    public function tambahDataPelajar()
    {
        $data = [
            "nama" => $this->input->Post('nama' , true),
            "nrp" => $this->input->Post('nrp' , true),
            "email" => $this->input->Post('email' , true),
            "jurusan" => $this->input->Post('jurusan', true),
        ];

        $this->db->insert('pelajar', $data);
    }

    public function hapusDataPelajar($id)       
    {
      //  $this->db->where('id' , $id);
        $this->db->delete('pelajar', ['id'=> $id]);
    }

    public function getPelajarById($id)
    {
      return  $this->db->get_where('pelajar', ['id'=> $id])->row_array();
    }

    public function ubahDataPelajar()
    {
        $data = [
            "nama" => $this->input->Post('nama' , true),
            "nrp" => $this->input->Post('nrp' , true),
            "email" => $this->input->Post('email' , true),
            "jurusan" => $this->input->Post('jurusan', true),
        ];

        $this->db->where('id' , $this->input->post('id'));
        $this->db->update('pelajar', $data);
    }

    public function cariDataPelajar()
    {
      $keyword = $this->input->post('keyword', true);
      $this->db->like('nama', $keyword);
      $this->db->or_like('jurusan' , $keyword);
      $this->db->or_like('nrp' , $keyword);
      $this->db->or_like('email' , $keyword);
      return $this->db->get('Pelajar')->result_array();
    }
}