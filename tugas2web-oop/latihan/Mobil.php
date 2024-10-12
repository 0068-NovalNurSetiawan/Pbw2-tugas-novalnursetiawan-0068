<?php

class Mobil
{
    const AUTHOR = "Noval Nur Setiawan";
    var string $nama;
    var string $merk;
    var ?string $warna = null;
    var int $tahun;
    var int $kecepatanMaksimal;
    
    function tambahKecepatan()
    {
        echo "Kecepatan Bertambah!";
    }

    function infoMobil(?string $nama)
    {
        //Kondisi jika parameter kosong maka akan ditampilkan properti dari objek
        if(is_null($nama))
        {
            echo "\nNama Mobil adalah {$this->nama}" . PHP_EOL;
        } else { // Jika parameter memiliki nilai maka yang ditampilkan adalah parameter pada function
            echo "\nMobil Anda adalah $nama" . PHP_EOL;
        }
    }
}

?>