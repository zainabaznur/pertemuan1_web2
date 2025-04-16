<?php 
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

//fungsi array pop
$makanan = ["bakso", "nasi uduk", "ketoprak"];
array_pop($makanan);
foreach($makanan as $person){
    echo $person. "<br/>";
}

?>