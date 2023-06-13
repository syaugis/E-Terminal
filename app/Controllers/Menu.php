<?php namespace App\Controllers;
use App\Models\ModelInformasi;
use App\Models\ModelJadwal;
use App\Models\ModelKupon;
class Menu extends BaseController
{

  public function __construct(){
    $this->ModelInformasi = new ModelInformasi();
    $this->ModelJadwal = new ModelJadwal();
    $this->ModelKupon = new ModelKupon();
  }
	
  // ADMIN
	public function menu_admin(){
    $data['title'] = 'Dashboard';
    return view('user/v_admin', $data);
	}

  // FITUR ADMIN
  public function kelola_penumpang(){
    return view('user/v_kelolapenumpang');
  }

  public function kelola_kondektur(){
    return view('user/v_kelolakondektur');
  }
   // FITUR ADMIN

	public function kondektur(){
    return view('user/v_kondektur');
  }
  
  public function dashboard_penumpang(){
    if(session()->get('level')<>3){
      return redirect()->to(base_url('auth/login'));
    }
    $data = array(
      'informasi' => $this->ModelInformasi->all_data(),
      'jadwal' => $this->ModelJadwal->all_data(),
      'title' => 'Dashboard'
    );
    return view('user/v_pengunjung', $data);
  }

	public function bus_penumpang(){
    if(session()->get('level')<>3){
      return redirect()->to(base_url('home/user'));
    }
    $data = array(
      'jadwal' => $this->ModelJadwal->all_data(),
      'title' => 'Bus'
    );
    return view('user/v_pengunjungBus', $data);
	}

	public function kupon_penumpang(){
    if(session()->get('level')<>3){
      return redirect()->to(base_url('home/user'));
    }
    $data = array(
      'kupon' => $this->ModelKupon->all_data(),
      'title' => 'Kupon'
    );
    return view('user/v_pengunjungKupon', $data);
	}

	public function informasi_penumpang(){
    if(session()->get('level')<>3){
      return redirect()->to(base_url('home/user'));
    }
    $data = array(
      'informasi' => $this->ModelInformasi->all_data(),
      'title' => 'Informasi'
    );
    return view('user/v_pengunjungInformasi', $data);
	}

  public function bantuan_penumpang(){
    if(session()->get('level')<>3){
      return redirect()->to(base_url('home/user'));
    }
    $data['title'] = 'Bantuan';
    return view('user/v_pengunjungBantuan', $data);
  }

	public function profil_penumpang(){
    if(session()->get('level')<>3){
      return redirect()->to(base_url('home/user'));
    }
    $data['title'] = 'Profil';
    return view('user/v_pengunjungProfil', $data);
	}

}
