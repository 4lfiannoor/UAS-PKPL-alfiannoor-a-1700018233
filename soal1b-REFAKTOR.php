<?php

//JAWABAN SOAL 1B UNTUK REFACTOR

interface PrismaSegitiga
{
    public function Hitung($pilihan, $kelilingAlas, $tinggi, $luasAlasSegitiga, $tinggi, $luasAlasSegitiga);
}

class LuasPermukaan implements PrismaSegitiga
{
    public function Hitung($pilihan, $kelilingAlas, $tinggi, $luasAlasSegitiga, $tinggi, $luasAlasSegitiga)
    {
        echo "Luas Permukaan Segitiga Adalah : " . (($kelilingAlas * $tinggi) + (2 * $luasAlasSegitiga));
    }   
}

class Volume implements PrismaSegitiga
{
    public function Hitung($pilihan, $kelilingAlas, $tinggi, $luasAlasSegitiga, $tinggi, $luasAlasSegitiga)
    {
        echo "Volume Prisma Segitiga Adalah : " . ((($alas * $tinggi)/2 * $TinggiPrisma));
    }
}

class PilihanPrismaSegitiga{

    public static function pilih($pilihan){
        switch ($pilihan) {
            case 'Luas':
                # code...
                return new LuasPermukaan;
                break;
            case 'Volume':
                # code...
                return new Volume;
                break;
            default:
                # code...
                return FALSE;
                break;
        }
    } 
}
$kelilingAlas = 5;
$tinggi = 3;
$luasAlasSegitiga = 10;
$alas = 2;
$TinggiPrisma = 10;
PilihanPrismaSegitiga::pilih('Luas')->Hitung($pilihan, $kelilingAlas, $tinggi, $luasAlasSegitiga, $tinggi, $luasAlasSegitiga)
echo '<br>';
PilihanPrismaSegitiga::pilih('Volume')->Hitung($pilihan, $kelilingAlas, $tinggi, $luasAlasSegitiga, $tinggi, $luasAlasSegitiga)
