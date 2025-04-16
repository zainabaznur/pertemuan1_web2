<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">NIM</th>
      <th scope="col">Nama</th>
      <th scope="col">Tugas</th>
      <th scope="col">UTS</th>
      <th scope="col">UAS</th>
      <th scope="col">Total</th>
      <th scope="col">Predikat</th>
    </tr>
  </thead>
  <?php
        $nilai1 = ["nim" => 110224009, "nama" => "zainab", "tugas" => 85, "uts" => 90, "uas" => 89];
        $nilai2 = ["nim" => 1102280009, "nama" => "budi", "tugas" => 99, "uts" => 78, "uas" => 76];
        $nilai3 = ["nim" => 110227009, "nama" => "eko", "tugas" => 90, "uts" => 98, "uas" => 96];
        $mhs = [$nilai1, $nilai2, $nilai3];
  ?>
  <tbody>
  <?php
        $nilai1 = ["nim" => 110224009, "nama" => "zainab", "tugas" => 85, "uts" => 90, "uas" => 89];
        $nilai2 = ["nim" => 1102280009, "nama" => "budi", "tugas" => 99, "uts" => 78, "uas" => 76];
        $nilai3 = ["nim" => 110227009, "nama" => "eko", "tugas" => 90, "uts" => 98, "uas" => 96];
        
        $mhs = [$nilai1, $nilai2, $nilai3];
        $No = 1; // Inisialisasi nomor urut
        
        foreach ($mhs as $item) {
            // Menghitung Total
            $total = ($item['tugas'] + $item['uts'] + $item['uas']) / 3;

            // Menentukan Predikat
            if ($total >= 85) {
                $predikat = "A";
            } elseif ($total >= 80) {
                $predikat = "A-";
            } elseif ($total >= 75) {
                $predikat = "B+";
            } elseif ($total >= 70) {
                $predikat = "B";
            } elseif ($total >= 65) {
                $predikat = "B-";
            } elseif ($total >= 60) {
                $predikat = "C+";
            } elseif ($total >= 55) {
                $predikat = "C";
            } elseif ($total >= 50) {
                $predikat = "C-";
            } elseif ($total >= 40) {
                $predikat = "D";
            } else {
                $predikat = "E";
            }
        ?>
        <tr>
          <td><?= $No++ ?></td>
          <td><?= $item['nim'] ?></td>
          <td><?= $item['nama'] ?></td>
          <td><?= $item['tugas'] ?></td>
          <td><?= $item['uts'] ?></td>
          <td><?= $item['uas'] ?></td>
          <td><?= number_format($total, 2) ?></td>
          <td><?= $predikat ?></td>
        </tr>
        <?php } ?>
  </tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>