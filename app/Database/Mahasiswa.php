<?
namespace App\Database;

class Mahasiswa
{
    private $nim;
    private $nama;
    private $jurusan;

    public function __construct($jurusan, $nama, $nim)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->jurusan = $jurusan;
    }

    public function getNim()
    {
        return $this->nim;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function getJurusan()
    {
        return $this->jurusan;
    }

    public function getFullInfo()
    {
        return "NIM : {$this->nim}, Nama : {$this->nama}, Jurusan : {$this->jurusan}";
    }
}