<?php

$get = file_get_contents("https://github.com/ramdanriawan/tugasPemrogramanWebKelompok3/archive/master.zip");
$put = file_put_contents("beritaindonesia.zip", $get);

if($put)
{ echo "berhasil";
}else {
    echo "gagal";
}

?>
