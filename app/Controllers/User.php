<?php namespace App\Controllers;
use App\Models\ModelUser;


class User extends BaseController
{

  public function __construct()
  {
    helper('form');
    $this->ModelUser = new ModelUser();
	}

	public function index()
	{
		$data = array(
			'title' => 'User',
      'user' => $this->ModelUser->all_data(),
			'isi' => 'user/v_index'
		);
		return view('layout/v_wrapper', $data);
	}

	public function add()
  {
    $data = array(
			'title' => 'Add User',
      'errors' => \Config\Services::validation(),
			'isi' => 'user/v_add'               
			
		);
		return view('layout/v_wrapper', $data);
  }

	public function save_insert()
  {
    if (!$this->validate([
      'nama_user'=>[
        'label' => 'Nama User',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} Tidak Boleh Kosong'
          ]
        ],
        'email'=>[
        'label' => 'E-Mail',
        'rules' => 'required|is_unique[tbl_user.email]',
        'errors' => [
          'required' => '{field} Tidak Boleh Kosong',
          'is_unique' => '{field} Sudah Ada, Input {field} lain'
          ]
        ],
        'password'=>[
        'label' => 'Password',
        'rules' => 'required',
        'errors' => [
          'required' => '{field} Tidak Boleh Kosong'
          ]
        ],
        'repassword'=>[
        'label' => 'Re-Password',
        'rules' => 'required|matches[password]',
        'errors' => [
          'required' => '{field} Tidak Boleh Kosong',
          'matches' => '{field} Tidak Sama'
          ]
				],
				'level'=>[
				'label' => 'Level',
				'rules' => 'required',
				'errors' => [
					'required' => '{field} Tidak Boleh Kosong'
					]
				]
    ])) {
			$errors = \Config\Services::validation();
      return redirect()->to(base_url('user/add'))->withInput()->with('errors', $errors);
		}else{
			$data = array(
        'nama_user' => $this->request->getPost('nama_user'),
        'email' => $this->request->getPost('email'),
        'password' => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT),
        'level' => $this->request->getPost('level'),
      );
      $this->ModelUser->add($data);
      session()->setFlashdata('pesanSukses', 'Data Berhasil Ditambahkan');
      return redirect()->to(base_url('user/index')); 
		}
  }

  public function update($id_user){
    $data = array(
      'id_user' => $id_user,
      'level' => $this->request->getPost('level'),
    );
    $this->ModelUser->update_data($data);
    session()->setFlashdata('pesanSukses','Level Berhasil Diubah');
    return redirect()->to(base_url('user/index'));
  }

	public function delete($id_user){
    $data = array(
      'id_user' => $id_user,
    );
    $this->ModelUser->delete_data($data);
    session()->setFlashdata('pesanSukses','Data Berhasil Dihapus');
    return redirect()->to(base_url('user/index/'.$id_user));
  }




}
