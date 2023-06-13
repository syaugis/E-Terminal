<?php namespace App\Controllers;
use App\Models\ModelJadwal;

use App\Models\ModelKondektur;


class Jadwal extends BaseController
{

  public function __construct()
  {
    helper('form');
    $this-> ModelJadwal = new ModelJadwal();

    $this->ModelKondektur = new ModelKondektur();
	}

	public function index()
	{
		$data = array(
			'title' => 'Jadwal',
      'jadwal' => $this->ModelJadwal->all_data(),
			'isi' => 'Jadwal/v_jadwal'
		);
		return view('layout/v_wrapper', $data);
	}

  public function add()
  {
    $data = array(
			'title' => 'Add Jadwal',
      'kondektur' => $this->ModelKondektur->all_data(),
			'isi' => 'Jadwal/v_add',
			'errors' => \Config\Services::validation()
		);
		return view('layout/v_wrapper', $data);
  }

	public function save_insert()
  {
    if (!$this->validate([
      'awal_terminal'=>[
        'label' => 'Terminal Awal',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} Tidak Boleh Kosong'
          ]
        ],
        'tujuan'=>[
        'label' => 'Tujuan',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} Tidak Boleh Kosong',
          'is_unique' => '{field} Sudah Ada, Input {field} lain'
          ]
        ],
        'waktu'=>[
        'label' => 'Waktu Berangkat',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} Tidak Boleh Kosong'
          ]
        ],
        'waktu_sampai'=>[
        'label' => 'Waktu Sampai',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} Tidak Boleh Kosong',
          ]
				],
				'id_knd'=>[
				'label' => 'Kondektur',
				'rules' => 'required',
				'errors' => [
					'required' => '{field} Tidak Boleh Kosong'
					]
				],
    ])) {
			$errors = \Config\Services::validation();
      return redirect()->to(base_url('jadwal/add'))->withInput()->with('errors', $errors);
		}else{
			$data = array(
        'awal_terminal' => $this->request->getPost('awal_terminal'),
        'tujuan' => $this->request->getPost('tujuan'),
        'waktu' => $this->request->getPost('waktu'),
        'waktu_sampai' => $this->request->getPost('waktu_sampai'),
        'id_knd' => $this->request->getPost('id_knd'),
      );
      $this->ModelJadwal->add($data);
      session()->setFlashdata('pesanSukses', 'Data Berhasil Ditambahkan');
      return redirect()->to(base_url('jadwal/index')); 
		}
  }

	public function edit($id_jadwal)
  {
    $data = array(
			'title' => 'Edit Jadwal',
			'kondektur' => $this->ModelKondektur->all_data(),
      'jadwal' => $this->ModelJadwal->detail_data($id_jadwal),
			'isi' => 'jadwal/v_edit',
			'errors' => \Config\Services::validation()
		);
		return view('layout/v_wrapper', $data);
  }

	public function save_edit($id_jadwal)
  {
    if (!$this->validate([
			'awal_terminal'=>[
        'label' => 'Terminal Awal',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} Tidak Boleh Kosong'
          ]
        ],
        'tujuan'=>[
        'label' => 'Tujuan',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} Tidak Boleh Kosong',
          'is_unique' => '{field} Sudah Ada, Input {field} lain'
          ]
        ],
        'waktu'=>[
        'label' => 'Waktu Berangkat',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} Tidak Boleh Kosong'
          ]
        ],
        'waktu_sampai'=>[
        'label' => 'Waktu Sampai',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} Tidak Boleh Kosong',
          ]
				],
				'id_knd'=>[
				'label' => 'Kondektur',
				'rules' => 'required',
				'errors' => [
					'required' => '{field} Tidak Boleh Kosong'
					]
				],
    ])) {
			$errors = \Config\Services::validation();
      return redirect()->to(base_url('jadwal/edit/'.$id_jadwal))->withInput()->with('errors', $errors);
		}else{
			$data = array(
				'id_jadwal' => $id_jadwal,
				'awal_terminal' => $this->request->getPost('awal_terminal'),
        'tujuan' => $this->request->getPost('tujuan'),
        'waktu' => $this->request->getPost('waktu'),
        'waktu_sampai' => $this->request->getPost('waktu_sampai'),
        'id_knd' => $this->request->getPost('id_knd'),
      );
      $this->ModelJadwal->update_data($data);
      session()->setFlashdata('pesanSukses', 'Data Berhasil Diupdate');
      return redirect()->to(base_url('jadwal/index/'.$id_jadwal)); 
		}
  }
	

	public function delete($id_jadwal){
    $data = array(
      'id_jadwal' => $id_jadwal,
    );
    $this->ModelJadwal->delete_data($data);
    session()->setFlashdata('pesanSukses','Data Berhasil Dihapus');
    return redirect()->to(base_url('jadwal/index/'.$id_jadwal));
  }

  
	


}
