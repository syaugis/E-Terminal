<?php
namespace App\Models;

use CodeIgniter\Model;

class ModelJadwal extends Model{

  public function all_data(){
    return $this->db->table('tbl_jadwal')
    ->join('tbl_kondektur', 'tbl_kondektur.id_knd = tbl_jadwal.id_knd', 'left')
    ->orderBy('id_jadwal', 'DESC')
    ->get()
    ->getResultArray();
  }

  public function detail_data($id_jadwal){
    return $this->db->table('tbl_jadwal')
    ->join('tbl_kondektur', 'tbl_kondektur.id_knd = tbl_jadwal.id_knd', 'left')
    ->where('id_jadwal',$id_jadwal)
    ->get()
    ->getRowArray();
  }

   public function add($data){
    $this->db->table('tbl_jadwal')->insert($data);
  }

  public function update_data($data){
    $this->db->table('tbl_jadwal')
    ->where('id_jadwal',$data['id_jadwal'])
    ->update($data);
  }

  public function delete_data($data){
    $this->db->table('tbl_jadwal')
    ->where('id_jadwal',$data['id_jadwal'])
    ->delete($data);
  }
  

  
 

}
