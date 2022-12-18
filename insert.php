<?php

// tangkap data dari form submit
if (isset($_POST["submit"])){
    // var_dump($_POST)
    $kode = $_POST['kode'];
    $todo = $_POST['todo'];

    // buat koneksi denan mysql
    $con = mysqli_connect("localhost","root","","todolist");

    // cek koneksi dengan mysql
    if(mysqli_connect_errno()){
        echo "Koneksi gagal ". mysqli_connect_error();
    }else{
        echo "Koneksi berhasil";
    }
    // buat sql query untuk insert ke database
    // buat query insert dan jalanakan
    $sql = "insert into todo (kode, todo) values ('$kode', '$todo')";

    // jalankan query
    if(mysqli_query($con, $sql)){
        echo "Data baru berhasil ditambahkan";
    }else{
        echo "Error:" . $sql . "<br>" . mysqli_connect_error($con);
    }


// tutup koneksi dengan database
mysqli_close($con);

}

?>