<?php
//deklasrasi variabel
        $db_host = "localhost";
        $db_user = "root";
        $db_pass = "123456";
        $db_name = "sekolah_db";
        $connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
   if($connection)    
// {
//  echo "Koneksi Berhasil!";
// } else {
//  echo "Koneksi Gagal! : ". mysqli_connect_error();
// }
?>