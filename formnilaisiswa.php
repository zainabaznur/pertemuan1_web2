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
    <div class="container mt-5">
        <h2>Form Nilai Mahasiswa</h2>
        <fieldset style="border:1px solid black; padding: 15px;">
            <legend>Silahkan isi form di bawah ini:</legend>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['submit'])) {
                // Ambil data dari form
                $nama_siswa = $_GET['nama'];
                $mata_kuliah = $_GET['matkul'];
                $nilai_uts = $_GET['nilai_uts'];
                $nilai_uas = $_GET['nilai_uas'];
                $nilai_tugas = $_GET['nilai_tugas'];

                // Hitung nilai akhir (rata-rata dengan bobot)
                $nilai_akhir = ($nilai_uts * 0.3) + ($nilai_uas * 0.4) + ($nilai_tugas * 0.3);

                // Tentukan grade berdasarkan nilai akhir
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

                // Tampilkan hasil input setelah submit
                echo "<h3>Hasil Input:</h3>";
                echo "<p><strong>Nama:</strong> $nama_siswa</p>";
                echo "<p><strong>Mata Kuliah:</strong> $mata_kuliah</p>";
                echo "<p><strong>Nilai UTS:</strong> $nilai_uts</p>";
                echo "<p><strong>Nilai UAS:</strong> $nilai_uas</p>";
                echo "<p><strong>Nilai Tugas:</strong> $nilai_tugas</p>";
                echo "<p><strong>Nilai Akhir:</strong> $nilai_akhir</p>";
                echo "<p><strong>Grade:</strong> $grade</p>";
                echo "<hr>";
            }
            ?>

            <form method="GET" action="">
                <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label">Nama</label> 
                    <div class="col-8">
                        <input id="nama" name="nama" type="text" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
                    <div class="col-8">
                        <select id="matkul" name="matkul" class="custom-select">
                            <option value="Dasar-Dasar Pemrograman">Dasar-Dasar Pemrograman</option>
                            <option value="Basis Data I">Basis Data I</option>
                            <option value="Pemrograman Web">Pemrograman Web</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
                    <div class="col-8">
                        <input id="nilai_uts" name="nilai_uts" type="number" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
                    <div class="col-8">
                        <input id="nilai_uas" name="nilai_uas" type="number" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
                    <div class="col-8">
                        <input id="nilai_tugas" name="nilai_tugas" type="number" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </fieldset>
    </div>
</body>
</html>
