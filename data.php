<?php 
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<style>
body {
background-color: #f2f2f;
  margin: 0;
  padding: 0;
}

h2 {
    margin: 0;
  padding: 20px 30px;
}

#box {
			width: 100px;
			height: 100px;
			background-color: red;
			position: absolute;
			top: 0;
			left: 0;
		}

.row {
  margin: 0;
  padding: 0;
}

.col-12,
.col-md-8 {
  padding: 30px;
}

.col-md-4 {
  padding: 30px;
  background-color: #fff;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.form-group {
  margin-bottom: 20px;
}

.form-control {
  border-radius: 0;
  border: 1px solid #ccc;
  padding: 10px;
  font-size: 16px;
  font-weight: 400;
}

.custom-control-label {
  font-size: 16px;
}

.list-group {
  margin-bottom: 0;
  padding-left: 0;
}

.list-group-item {
  padding: 10px 20px;
  font-size: 16px;
  font-weight: 400;
}

.list-group-item.active {
  background-color: #212121;
  color: #fff;
}

.btn-primary {
  background-color: #212121;
  border-color: #212121;
  padding: 10px 30px;
  font-size: 16px;
  font-weight: 600;
}

.btn-primary:hover {
  background-color: #000;
  border-color: #000;
}

.btn-primary:focus {
  box-shadow: none;
}
</style>   
<body>
    <div class="container">
        <h1 class="my-4">Belanja Online</h1>
        <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.php">Week 2</a></li>
                <li class="breadcrumb-item active">Belanja Online</li>
            </ol>
            <div style="height: 5vh"></div>
            <div class="card mb-4">
                <div class="card-body">
        <hr>
        <form method="POST" action="jumlah.php">
            <div class="form-group">
                <label for="customer">Customer</label>
                <input id="customer" name="customer" placeholder="Masukan nama anda" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Pilih Produk</label>
                <div class="custom-control custom-radio">
                    <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV">
                    <label for="produk_0" class="custom-control-label">TV</label>
                </div>
                <div class="custom-control custom-radio">
                    <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas">
                    <label for="produk_1" class="custom-control-label">Kulkas</label>
                </div>
                <div class="custom-control custom-radio">
                    <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci">
                    <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                </div>
            </div>
            <div class="form-group">
                <label for="jumlah">Jumlah</label>
                <input id="jumlah" name="jumlah" type="text" class="form-control">
            </div>
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </form>
        <div class="mt-4">
            <h4>Daftar Harga</h4>
            <ul class="list-group">
                <li class="list-group-item">TV : 4.200.000</li>
                <li class="list-group-item">Kulkas : 3.100.000</li>
                <li class="list-group-item">Mesin Cuci : 3.000.000</li>
                <li class="list-group-item">Harga dapat berubah setiap saat</li>
            </ul>
        </div>
    </div>
<?php 
include "footer.php"; 
?>
    <script>
		let box = document.getElementById('box');
		box.style.top = '50px';
		box.style.left = '50px';
	</script>
</body>
</html>