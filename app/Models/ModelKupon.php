<?php
namespace App\Models;

use CodeIgniter\Model;

class ModelKupon extends Model{

  public function all_data(){
    return $this->db->table('tbl_kupon')
    ->join('tbl_user', 'tbl_user.id_user = tbl_kupon.id_user', 'left')
    ->orderBy('id_kupon', 'DESC')
    ->get()
    ->getResultArray();
  }

  public function detail_data($id_kupon){
    return $this->db->table('tbl_kupon')
    ->join('tbl_jadwal', 'tbl_jadwal.id_jadwal = tbl_kupon.id_jadwal', 'left')
    ->join('tbl_user', 'tbl_user.id_user = tbl_kupon.id_user', 'left')
    ->where('id_kupon',$id_kupon)
    ->get()
    ->getRowArray();
  }

   public function add($data){
    $this->db->table('tbl_kupon')->insert($data);
  }

  public function update_data($data){
    $this->db->table('tbl_kupon')
    ->where('id_kupon',$data['id_kupon'])
    ->update($data);
  }

  public function delete_data($data){
    $this->db->table('tbl_kupon')
    ->where('id_kupon',$data['id_kupon'])
    ->delete($data);
  }

  

  
 

}
