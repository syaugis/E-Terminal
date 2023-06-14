<?php
namespace App\Models;

use CodeIgniter\Model;

class ModelKondektur extends Model{

  public function all_data(){
    return $this->db->table('tbl_kondektur')
    ->orderBy('id_knd', 'DESC')
    ->get()
    ->getResultArray();
  }


  
  
 

}
