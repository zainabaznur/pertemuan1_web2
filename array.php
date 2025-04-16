<?php 
$temanSaya = ["Jamet", "Alam", "Nobel"];
print_r($temanSaya); //untuk menampilkan seluruh nilai array
echo $temanSaya[2];
echo "<ol>";
foreach ($temanSaya as $key => $value) {
    echo "<li>$key. $value</li>";
}
echo "</ol>";
$temanSaya[5] = "eko";
unset($temanSaya[0]);
print_r($temanSaya);

echo"<br><br><br><br>";
$buah = ["m" => "markisa", "d" => "duren"];
print_r($buah)

// fungsi sort mengurut angka dari terkecil
$ar_hewan = ["k"=>"kelinci","a"=>"ayam","k"=>"kuda","j"=>"jerapah" ];
echo '<ol>';
foreach($ar_hewan as $key =>$value){
    echo '<li>'.$key.' - ' . $value .'</li>';
}
echo '</ol>';
sort($ar_hewan);
echo '<hr/>';
echo '<ol>';
foreach($ar_hewan as $key =>$value){
echo '<li>'.$key.' - ' . $value .'</li>';
}
echo '</ol>';

//fungsi array pop menghapus value paling akhir
$makanan = ["bakso", "nasi uduk", "ketoprak"];
array_pop($makanan);
foreach($makanan as $person){
    echo $person. "<br/>";
}

//fungsi push  menghapus value paling akhir
$makanan = ["bakso", "nasi uduk", "ketoprak"];
array_push($makanan);
foreach($makanan as $person){
    echo $person. "<br/>";
}
?>