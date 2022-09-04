<?php

/**
 * 
 */
class M_karantina extends CI_Model
{
    //method yang dibuat di controller (Admin.php)
    public function tampil_data()
    {
        //pemanggilan data yang berada di tabel tb_karantina
        return $this->db->get('tb_krn')->result();
    }

    //method yang dibuat di controller (Admin.php)
    public function input_data($tabel, $data)
    {
        //memasukan data inputan ke tabel tb_karantina
        $this->db->insert($tabel, $data);
    }

    public function get_foto($id)
    {
        $this->db->select('foto');
        $this->db->from('tb_krn');
        $this->db->where('id', $id);
        return $this->db->get()->row();
    }

    //method yang dibuat di controller (Admin.php) untuk menghapus data
    public function hapus_data($id, $tabel)
    {
        $this->db->where('id', $id);
        //menghapus data dari tabel tb_karantina
        $this->db->delete($tabel);
    }

    //method yang dibuat di controller (Admin.php) untuk merubah data 
    public function get_data($id, $table)
    {
        //merubah data dari tabel tb_karantina
        //$this->db->from();
        $this->db->where('id', $id);
        return $this->db->get($table)->row();
    }

    //method yang dibuat di controller (Admin.php) untuk mengupdate data 
    public function update_data($id, $data, $table)
    {
        $this->db->where('id', $id);
        //mengupdate data dari tabel tb_karantina
        $this->db->update($table, $data);
    }
    //method yang dibuat di controller (Admin.php dan C_karantina) untuk menampilkan detail data 
    public function detail_data($where, $table)
    {
        $this->db->where($where);
        return $this->db->get($table)->row();
    }
}

//end of file M_karantina.php
//location application\model