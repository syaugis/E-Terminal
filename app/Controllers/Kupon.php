<?php namespace App\Controllers;
use App\Models\ModelJadwal;
use App\Models\ModelKupon;
use App\Models\ModelUser;



class Kupon extends BaseController
{

  public function __construct()
  {
    helper('form');
    $this-> ModelJadwal = new ModelJadwal();

    $this->ModelKupon = new ModelKupon();
    $this->ModelUser = new ModelUser();
	}

	public function index()
	{
		$data = array(
			'title' => 'Kupon',
      'kupon' => $this->ModelKupon->all_data(),
			'isi' => 'user/kupon/v_kupon'
		);
		return view('layout/v_wrapper', $data);
	}

  public function add()
  {
    $data = array(
			'title' => 'Add Kupon',
      'user' => $this->ModelUser->all_data(),
			'isi' => 'user/kupon/v_add',
			'errors' => \Config\Services::validation()
		);
		return view('layout/v_wrapper', $data);
  }

	public function save_insert()
  {
    if (!$this->validate([
      'kd_kupon'=>[
        'label' => 'Kode Kupon',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} Tidak Boleh Kosong'
          ]
        ],
        'tgl_dibuat'=>[
        'label' => 'Tanggal Dibuat',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} Tidak Boleh Kosong',
          'is_unique' => '{field} Sudah Ada, Input {field} lain'
          ]
        ],
				'id_user'=>[
				'label' => 'Email',
				'rules' => 'required',
				'errors' => [
					'required' => '{field} Tidak Boleh Kosong'
					]
				],
    ])) {
			$errors = \Config\Services::validation();
      return redirect()->to(base_url('kupon/add'))->withInput()->with('errors', $errors);
		}else{
			$data = array(
        'kd_kupon' => $this->request->getPost('kd_kupon'),
        'tgl_dibuat' => $this->request->getPost('tgl_dibuat'),
        'id_user' => $this->request->getPost('id_user'),
      );
      $this->ModelKupon->add($data);
      session()->setFlashdata('pesanSukses', 'Data Berhasil Ditambahkan');
      return redirect()->to(base_url('kupon/index')); 
		}
  }

	public function edit($id_kupon)
  {
    $data = array(
			'title' => 'Edit Kupon',
			'kupon' => $this->ModelKupon->detail_data($id_kupon),
      'user' => $this->ModelUser->detail_data(),
			'isi' => 'user/kupon/v_edit',
			'errors' => \Config\Services::validation()
		);
		return view('layout/v_wrapper', $data);
  }

	public function save_edit($id_kupon)
  {
    if (!$this->validate([
      'kd_kupon'=>[
        'label' => 'Kode Kupon',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} Tidak Boleh Kosong'
          ]
        ],
        'tgl_dibuat'=>[
        'label' => 'Tanggal Dibuat',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} Tidak Boleh Kosong',
          'is_unique' => '{field} Sudah Ada, Input {field} lain'
          ]
        ],
				'id_user'=>[
				'label' => 'Jadwal',
				'rules' => 'required',
				'errors' => [
					'required' => '{field} Tidak Boleh Kosong'
					]
				],
    ])) {
			$errors = \Config\Services::validation();
      return redirect()->to(base_url('kupon/edit/'.$id_kupon))->withInput()->with('errors', $errors);
		}else{
			$data = array(
        'kd_kupon' => $this->request->getPost('kd_kupon'),
        'tgl_dibuat' => $this->request->getPost('tgl_dibuat'),
        'id_user' => $this->request->getPost('id_user'),
      );
      $this->ModelKupon->update_data($data);
      session()->setFlashdata('pesanSukses', 'Data Berhasil Diupdate');
      return redirect()->to(base_url('kupon/index/'.$id_kupon)); 
		}
  }
	

	public function delete($id_kupon){
    $data = array(
      'id_kupon' => $id_kupon,
    );
    $this->ModelKupon->delete_data($data);
    session()->setFlashdata('pesanSukses','Data Berhasil Dihapus');
    return redirect()->to(base_url('kupon/index/'.$id_kupon));
  }

  
	


}
