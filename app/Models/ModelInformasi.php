<?php
namespace App\Models;

use CodeIgniter\Model;

class ModelInformasi extends Model{

  public function all_data(){
    return $this->db->table('tbl_informasi')
    ->orderBy('id_info', 'DESC')
    ->get()
    ->getResultArray();
  }

  public function detail_data($id_info){
    return $this->db->table('tbl_informasi')
    ->where('id_info',$id_info)
    ->get()
    ->getRowArray();
  }

  public function update_data($data){
    $this->db->table('tbl_informasi')
    ->where('id_info',$data['id_info'])
    ->update($data);
  }

  public function add($data){
    $this->db->table('tbl_informasi')->insert($data);
  }

  public function delete_data($data){
    $this->db->table('tbl_informasi')
    ->where('id_info',$data['id_info'])
    ->delete($data);
  }



}
