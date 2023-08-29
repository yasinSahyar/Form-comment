<?php
// $isimler = array("yasin","kemal","isa","ayjamal","bilkiz","zohregul");

// foreach ($isimler as $isim) {
//     echo "$isim <br>";
// }

// foreach ($isimler as $indeks => $isim) {
//     echo "$indeks indeksli eleman - $isim <br>";
// }

$harifler = range("a","z");

foreach ($harifler as $indeks => $harf) {
    echo "$indeks indeksli eleman - $harf <br>";
}
?>