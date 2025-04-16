<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Mahasiswa</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

<h2 class="text-center">Form Nilai Mahasiswa</h2>

<fieldset style="border:1px solid black; padding: 10px; margin: 20px;">
    <legend>Form Input Nilai Mahasiswa</legend>

<?php
    $data_matkul = [
        "Web1" => "Pemrograman Web 1", 
        "Web2" => "Pemrograman Web 2",
        "BASDAT" => "Basis Data",
        "UI/UX" => "UI/UX",
        "JARKOM" => "Jaringan Komputer",
        "PKK" => "Pemrograman Keamanan Komputer",
    ];
?>

<form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nama" name="nama" placeholder="Masukkan nama" type="text" required class="form-control">
      </div>
    </div>
  </div>
  
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select" required>
        <?php
            foreach ($data_matkul as $key => $value) {
                echo "<option value='$value'>$value</option>";
            }
        ?>
      </select> 
    </div>
  </div>
  
  <div class="form-group row">
    <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="number" class="form-control" required>
    </div>
  </div>

  <div class="form-group row">
    <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="number" class="form-control" required>
    </div>
  </div>

  <div class="form-group row">
    <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas / Praktikum</label> 
    <div class="col-8">
      <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="number" class="form-control" required>
    </div>
  </div> 

  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

</fieldset>

<?php 
if(isset($_GET['submit'])) {
    $nama = $_GET['nama'];
    $matkul = $_GET['matkul'];
    $nilai_uts = $_GET['nilai_uts'];
    $nilai_uas = $_GET['nilai_uas'];
    $nilai_tugas = $_GET['nilai_tugas'];

    // Menghitung nilai akhir
    $nilai_akhir = ($nilai_uts * 0.3) + ($nilai_uas * 0.4) + ($nilai_tugas * 0.3);

    // Menentukan grade
    if ($nilai_akhir >= 85) {
        $grade = "A";
    } elseif ($nilai_akhir >= 75) {
        $grade = "B";
    } elseif ($nilai_akhir >= 60) {
        $grade = "C";
    } elseif ($nilai_akhir >= 50) {
        $grade = "D";
    } else {
        $grade = "E";
    }

    echo "<h2 class='text-center'>Hasil Perhitungan Nilai Mahasiswa</h2>";
    echo "<div class='container'>";
    echo "<p>Nama Mahasiswa: <strong>$nama</strong></p>";
    echo "<p>Mata Kuliah: <strong>$matkul</strong></p>";
    echo "<p>Nilai UTS: <strong>$nilai_uts</strong></p>";
    echo "<p>Nilai UAS: <strong>$nilai_uas</strong></p>";
    echo "<p>Nilai Tugas: <strong>$nilai_tugas</strong></p>";
    echo "<p>Nilai Akhir: <strong>$nilai_akhir</strong></p>";
    echo "<p>Grade: <strong>$grade</strong></p>";
    echo "</div>";
}
?>

</body>
</html>
