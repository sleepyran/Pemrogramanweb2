<?php 
include "header.php"; 
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Hasil Nilai Mahasiswa</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.php">Week 2</a></li>
                <li class="breadcrumb-item active">Hasil Nilai</li>
            </ol>
            <div style="height: 5vh"></div>
            <div class="card mb-4">
                <div class="card-body">
<?php
//ambil value yang diinput user dan simpan ke dalam variable
$proses = $_POST['proses'];
$nama = $_POST['nama'];
$matkul = $_POST['matkul'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];
$praktikum = $_POST['praktikum'];
$rata_rata = (($uts+$uas+$praktikum)/3); 
$keterangan = keterangan($rata_rata);
$grade = grade($rata_rata);


function keterangan ($rata_rata){
if ($rata_rata >=55 && $rata_rata <=100) {
    return 'Anda Lulus';
}else {
    return 'Anda Tidak Lulus';
}
}

function grade($rata_rata){
    if ($rata_rata >= 85 && $rata_rata <=100) {
        return "A (Sangat baik)";
    } elseif ($rata_rata >= 70 && $rata_rata <=84) {
        return "B (baik)";
    } elseif ($rata_rata >= 56 && $rata_rata <=69) {
        return "C (Cukup)";
    }  elseif ($rata_rata >= 36 && $rata_rata <=55) {
        return "D (Kurang)";
    } elseif ($rata_rata >= 0 && $rata_rata <=35) {
        return "E (Sangat Kurang)";
    }else{
        return "I (Tidak Nilai)";
    }
}

// panggil variabel
echo "Proses : $proses <br>";
echo "Nama Lengkap : $nama <br>";
echo "Mata Kuliah : $matkul <br>";
echo "Nilai UTS : $uts <br>";
echo "Nilai UAS : $uas <br>";
echo "Nilai Praktikum  : $praktikum <br>";
echo "Rata-rata : $rata_rata <br>";
echo "Keterangan : $keterangan <br>";
echo "Grade: $grade <br>";
?>
    </div>
</div>
<?php 
include "footer.php"; 
?>