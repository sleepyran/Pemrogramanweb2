<?php
// Menangkap value form bedasarkan unique name & menyimpannya kedalam variabel
$nim = $_POST['nim']; 
$nama = $_POST[ 'nama'];
$jk  = $_POST['jk']; 
$prodi= $_POST['prodi'];
$skill  = $_POST['skill']; 
$domisili  = $_POST['domisili']; 
$email  = $_POST['email'];
$nilai = 0;
foreach ($skill as $data) {
    switch ($data) {
        case 'html':
            $nilai += 10;
            break;
        case 'css': 
            $nilai += 10;
            break;
        case 'js':
            $nilai += 20;
            break;
        case 'rwd':
            $nilai += 20;
            break;
        case 'php':
            $nilai += 30;
            break;
        case 'python':
            $nilai += 30;
            break;
        case 'java':
            $nilai += 50;
            break;
                    
        default:
            break;
    }
}

echo "<style>
    h4 {
        text-align: center;
    }
</style>";
// tampilkan value ke dalam web browser
echo "<h4>Informasi yang dikirim : </h4>";
echo  "NIM : $nim ";
echo  "<br/>Nama : $nama";
echo  "<br/>Jenis Kelamin : $jk";  
echo  "<br/>Program Studi : $prodi";
echo  "<br/>Skill : ";
foreach ($skill as $data) {
    echo $data . " , ";
}
echo  "<br/>Domisili  : $domisili";
echo  "<br/>Email : $email";
echo  "<br/>Nilai : $nilai";
echo "<br/>Keterampilan : ";

if ($nilai >= 0 && $nilai <= 40) {
    echo "Kurang.";
} elseif ($nilai > 40 && $nilai <= 60) {
    echo "Cukup.";
} elseif ($nilai > 60 && $nilai < 100) {
    echo "Baik.";
} elseif ($nilai >= 100 && $nilai <= 150) {
    echo "Sangat Baik.";
} else {
    echo "Skor tidak valid.";
}
echo "</td></tr>";
echo "</table>";
?>