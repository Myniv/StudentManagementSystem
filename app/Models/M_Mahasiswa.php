<?php
namespace App\Models;

use App\Database\Mahasiswa;

class M_Mahasiswa
{
    private $students;
    private $session;

    public function __construct()
    {
        // $this->students[] = new Mahasiswa("2011500457", "Mulyana", "Teknik Informatika");
        // $this->students[] = new Mahasiswa("2011501810", "Test", "Test");
        $this->session = session(); // session
        $this->students = $this->session->get('students') ?? [];
    }
    private function saveData()
    {
        $this->session->set('students', $this->students); // Save students to session
    }

    public function getAllStudents()
    {
        return $this->students;
    }

    public function getStudentByNIM($nim)
    {
        foreach ($this->students as $student) {
            if ($student->getNim() == $nim) {
                return $student;
            }
        }
        return null;
    }

    // public function addStudent($nim, $nama, $jurusan)
    // {
    //     $this->students[] = new Mahasiswa($nim, $nama, $jurusan);
    // }

    public function addStudent(Mahasiswa $mahasiswa)
    {
        $this->students[] = $mahasiswa;
        $this->saveData();

    }

    public function updateStudent(Mahasiswa $mahasiswa)
    {
        foreach ($this->students as $key => $student) {
            if ($student->getNim() == $mahasiswa->getNim()) {
                $this->students[$key] = $mahasiswa;
                $this->saveData();
            }
        }
    }
    public function deleteStudent($nim)
    {
        foreach ($this->students as $key => $student) {
            if ($student->getNim() == $nim) {
                unset($this->students[$key]);
                $this->saveData();
            }
        }
    }
}