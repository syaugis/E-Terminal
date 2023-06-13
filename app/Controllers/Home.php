<?php

namespace App\Controllers;
class Home extends BaseController{
    public function user(){
        if(session()->get('level')==1){
            return redirect()->to(base_url('menu/menu_admin'));
        }elseif(session()->get('level')==2){
            return redirect()->to(base_url('menu/kondektur'));
        }elseif(session()->get('level')==3){
            return redirect()->to(base_url('menu/dashboard_penumpang'));
        }
    }
}
