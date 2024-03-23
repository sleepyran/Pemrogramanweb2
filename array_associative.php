<?php
include "header.php";
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4"> 
        <h1 class="mt-4">Array Associative</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.php">Week 1</a></li>
                <li class="breadcrumb-item active">Array Associative</li>
            </ol>
            <div style="height: 10vh"></div>
            <div class="card mb-4">
                <div class="card-body">
                    <?php
                    $animals = ["k" => "kucing", "a" => "ayam", "b" => "banteng", "i" => "ikan"];
                    echo 'Ini adalah hewan : ' .$animals["b"];
                    echo "<br>";
                    echo 'Ini adalah hewan : ' .$animals["i"];
                    echo "<br>";
                    ?>
                </div>
            </div>
        </div>
    </main>
    <!-- Panggil file bawah -->
    <?php include "footer.php"; 
    ?>
</div>