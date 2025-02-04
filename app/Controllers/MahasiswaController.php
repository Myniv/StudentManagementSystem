<?php

namespace App\Controllers;

use App\Database\Mahasiswa;
use App\Models\M_Mahasiswa;

class MahasiswaController extends BaseController
{
    private $mahasiswaModel;

    public function __construct()
    {
        $this->mahasiswaModel = new M_Mahasiswa();
    }
    public function index()
    {
        $data = $this->mahasiswaModel->getAllStudents();
        return view('mahasiswa/v_mahasiswa_list', ['mahasiswa' => $data]);
    }

    public function detail($nim)
    {
        $data = $this->mahasiswaModel->getStudentByNIM($nim);
        return view('mahasiswa/v_mahasiswa_detail', ['mahasiswa' => $data]);
    }

    public function create()
    {
        $mahasiswa = new Mahasiswa($this->request->getPost());
        $this->mahasiswaModel->addStudent($mahasiswa);
        return redirect()->to("/mahasiswa");
    }
    public function goCreate()
    {
        return view('mahasiswa/create');
    }

    public function update()
    {
        $nim = $this->request->getPost('nim');
        $name = $this->request->getPost('nama');
        $jurusan = $this->request->getPost('jurusan');

        $mahasiswa = new Mahasiswa($nim, $name, $jurusan);
        $this->mahasiswaModel->updateStudent($mahasiswa);

        return redirect()->to("/mahasiswa");
    }
    public function goUpdate($nim)
    {
        $data['mahasiswa'] = $this->mahasiswaModel->getStudentByNIM($nim);
        return view('mahasiswa/update', $data);
    }

    public function delete($nim)
    {
        $this->mahasiswaModel->deleteStudent($nim);
        return redirect()->to("/mahasiswa");
    }
}