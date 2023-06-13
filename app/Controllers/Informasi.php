<?php namespace App\Controllers;
use App\Models\ModelInformasi;



class Informasi extends BaseController
{

  public function __construct()
  {
    helper('form');
    $this-> ModelInformasi = new ModelInformasi();
	}

	public function index()
	{
		$data = array(
			'title' => 'Informasi',
      'informasi' => $this->ModelInformasi->all_data(),
			'isi' => 'Informasi/v_informasi'
		);
		return view('layout/v_wrapper', $data);
	}

  public function add()
  {
    $data = array(
			'title' => 'Add Informasi',
      'errors' => \Config\Services::validation(),
			'isi' => 'informasi/v_add'               
			
		);
		return view('layout/v_wrapper', $data);
  }

  public function save_insert()
  {
    if (!$this->validate([
      'judul'=>[
        'label' => 'Judul',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} Tidak Boleh Kosong'
          ]
        ],
        'isi'=>[
        'label' => 'Isi',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} Tidak Boleh Kosong',
          ]
        ],
        'waktu_kejadian'=>[
        'label' => 'Waktu Kejadian',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} Tidak Boleh Kosong'
          ]
        ],
    ])) {
			$errors = \Config\Services::validation();
      return redirect()->to(base_url('informasi/add'))->withInput()->with('errors', $errors);
		}else{
			$data = array(
        'judul' => $this->request->getPost('judul'),
        'isi' => $this->request->getPost('isi'),
        'waktu_kejadian' => $this->request->getPost('waktu_kejadian'),
      );
      $this->ModelInformasi->add($data);
      session()->setFlashdata('pesanSukses', 'Data Berhasil Ditambahkan');
      return redirect()->to(base_url('informasi')); 
		}
  }

  public function edit($id_info)
  {
    $data = array(
			'title' => 'Edit Informasi',
      'informasi' => $this->ModelInformasi->detail_data($id_info),
			'isi' => 'informasi/v_edit',
			'errors' => \Config\Services::validation()
		);
		return view('layout/v_wrapper', $data);
  }

	public function save_edit($id_info)
  {
    if (!$this->validate([
			'judul'=>[
        'label' => 'Judul',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} Tidak Boleh Kosong'
          ]
        ],
        'isi'=>[
        'label' => 'Isi',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} Tidak Boleh Kosong',
          ]
        ],
        'waktu_kejadian'=>[
        'label' => 'Waktu Kejadian',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} Tidak Boleh Kosong'
          ]
        ],
    ])) {
			$errors = \Config\Services::validation();
      return redirect()->to(base_url('informasi/edit/'.$id_info))->withInput()->with('errors', $errors);
		}else{
			$data = array(
				'id_info' => $id_info,
        'judul' => $this->request->getPost('judul'),
        'isi' => $this->request->getPost('isi'),
        'waktu_kejadian' => $this->request->getPost('waktu_kejadian'),
      );
      $this->ModelInformasi->update_data($data);
      session()->setFlashdata('pesanSukses', 'Data Berhasil Diupdate');
      return redirect()->to(base_url('informasi/index/'.$id_info)); 
		}
  }

  public function delete($id_info){
    $data = array(
      'id_info' => $id_info,
    );
    $this->ModelInformasi->delete_data($data);
    session()->setFlashdata('pesanSukses','Data Berhasil Dihapus');
    return redirect()->to(base_url('informasi/index/'.$id_info));
  }




}
