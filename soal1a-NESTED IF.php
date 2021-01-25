<?php
// JAWABAN SOAL 1A, TERDAPAT NESTED IF
class LatihanRegitrasi
{
    function registrasi($nipy)
    {
        if($nim == 'Terdaftar'){
            return = TRUE;
        }
    }

    function main($nipy)
    {
        if ($this->registrasi($nipy) == TRUE){
            return 'Nipy Sudah Terdaftar';
        }
         return 'Nipy Belum Mendaftar';
    }
}
$checknipy = new LatihanRegitrasi;
$cek = $checknipy->main('Terdaftar');
echo $cek;
