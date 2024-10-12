<?php

class Mahasiswa {
    // Properties
    public $nama;
    public $nim;
    public $jurusan;
    public $ipk;

    // Constructor
    public function __construct($nama, $nim, $jurusan, $ipk) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
        $this->ipk = $ipk;
    }

    // Method untuk menampilkan data mahasiswa
    public function tampilkanData() {
        echo "Nama: " . $this->nama . "<br>";
        echo "NIM: " . $this->nim . "<br>";
        echo "Jurusan: " . $this->jurusan . "<br>";
        echo "IPK: " . $this->ipk . "<br>";
    }

    // Method untuk menentukan status kelulusan
    public function statusKelulusan() {
        if ($this->ipk >= 3.0) {
            return "Lulus";
        } else {
            return "Tidak Lulus";
        }
    }
}

// Membuat objek dari kelas Mahasiswa
$mahasiswa1 = new Mahasiswa(" noval nur setiawan", "232400068", "Informatika", 4.0);
$mahasiswa2 = new Mahasiswa(" Aisyah", "232400090", "Sistem Informasi", 2.8);

// Menampilkan data mahasiswa
$mahasiswa1->tampilkanData();
echo "Status: " . $mahasiswa1->statusKelulusan() . "<br><br>";

$mahasiswa2->tampilkanData();
echo "Status: " . $mahasiswa2->statusKelulusan() . "<br>";

?>
