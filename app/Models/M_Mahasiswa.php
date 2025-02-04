<?php
namespace App\Models;

use App\Database\Mahasiswa;

class M_Mahasiswa
{
    private $students;
    public function __construct()
    {
        $this->students[] = new Mahasiswa("2011500457", "Mulyana", "Teknik Informatika");
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
    }

    public function updateStudent(Mahasiswa $mahasiswa)
    {
        foreach ($this->students as $key => $student) {
            if ($student->getNim() == $mahasiswa->getNim()) {
                $this->students[$key] = $mahasiswa;
            }
        }
    }
    public function deleteStudent(Mahasiswa $mahasiswa)
    {
        foreach ($this->students as $key => $student) {
            if ($student->getNim() == $mahasiswa->getNim()) {
                unset($this->students[$key]);
            }
        }
    }
}