<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class= "container">
    <form method="POST" action="hasil.php">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama:</label> 
    <div class="col-8">
      <input id="nama" name="nama" placeholder="Silahkan Masukkan Nama" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah:</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select" required="required">
        <option value="ddp">Dasar-dasar Pemrograman</option>
        <option value="web">Pemrograman Web</option>
        <option value="basdat">Basis Data</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="uts" class="col-4 col-form-label">Nilai UTS:</label> 
    <div class="col-8">
      <input id="uts" name="uts" placeholder="Masukkan Nilai UTS" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="uas" class="col-4 col-form-label">Nilai UAS:</label> 
    <div class="col-8">
      <input id="uas" name="uas" placeholder="Masukkan Nilai UAS" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="praktikum" class="col-4 col-form-label">Nilai Praktikum:</label> 
    <div class="col-8">
      <input id="praktikum" name="praktikum" placeholder="Masukkan Nilai Praktikum" type="text" class="form-control" required="required">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" value="Data Berhasil Disimpan" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
    </div>
</body>
</html>
<hr>
<h3>Hasil Inputan: </h3>