<?php
include "header.php";
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Array Multidimensi</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.php">Week 1</a></li>
                <li class="breadcrumb-item active">Array Multidimensi</li>
            </ol>
            <div style="height: 5vh"></div>
            <div class="card mb-4">
                <div class="card-body">

<?php
$mahasiswas = [["Anies", "TI", "8"],
["Prabowo", "SI", "9"],
["Ganjar", "BD", "16"]];

foreach ($mahasiswas as $mahasiswa) {
    echo "Nama : " .$mahasiswa[0] ."<br>";
    echo "Jurusan : " .$mahasiswa[1] ."<br>";
    echo "Semester : " .$mahasiswa[2] ."<br>";
    echo "<br>";
}
?>
                </div>
            </div>
        </div>
    </main>
    <!-- Panggil file bawah -->
    <?php include "footer.php";
    ?>
</div>