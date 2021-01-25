<?php
// JAWABAN SOAL 1A, MENGGUNAKAN TEKNIK GRUADCLAUSE 
class LatihanRegitrasi
{
    function registrasi($nipy)
    {
        if($nim == 'Terdaftar'){
            return TRUE;
        }
    }

    function main($niyp)
    {
        if ($this->registrasi($niyp) == TRUE){
            return 'Nipy Sudah Terdaftar';
        }
        else{
            return 'Nipy Belum Terdaftar';
        }
    }
}
$checknipy = new LatihanRegitrasi;
$cek = $checknipy->main('Terdaftar');
echo $cek;
