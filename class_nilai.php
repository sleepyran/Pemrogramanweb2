<?php
// class nilai
class Nilai{
// properti
public $nim, $matkul, $uts, $uas, $praktikum;
// method
public function __construct($nim, $matkul, $uts, $uas, $praktikum){
    // fungsi this -> memanggil properti dari luar method
    $this->nim = $nim;
    $this->matkul = $matkul;
    $this->uts = $uts;
    $this->uas = $uas;
    $this->praktikum = $praktikum;
}
public function Hitung(){
        $rata2 = ($this->uts + $this->uas + $this->praktikum) / 3;
        $grade = $this->determineGrade($rata2);
        $predikat = $this->determinePredikat($grade);
        return "Rata-Rata: $rata2  <br> 
        Grade: $grade <br> 
        Predikat: $predikat";
    }

    private function determineGrade($rata2){
        if ($rata2 < 0 || $rata2 > 100) {
            return 'I'; // Tidak Ada Grade
        } elseif ($rata2 >= 85) {
            return 'A';
        } elseif ($rata2 >= 70) {
            return 'B';
        } elseif ($rata2 >= 56) {
            return 'C';
        } elseif ($rata2 >= 36) {
            return 'D';
        } else {
            return 'E';
        }
    }

    private function determinePredikat($grade){
        switch ($grade) {
            case 'A':
                return 'Sangat Memuaskan';
                break;
            case 'B':
                return 'Memuaskan';
                break;
            case 'C':
                return 'Cukup';
                break;
            case 'D':
                return 'Kurang Memuaskan';
                break;
            case 'E':
                return 'Sangat Kurang Memuaskan';
                break;
            default:
                return 'Tidak Ada';
                break;
        }
    }
}
?>