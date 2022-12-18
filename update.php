<?php

if(isset($_GET['id'])){
    // ambil id dari url atau method get
    $id = $_GET['id'];

// Buat koneksi dengan mySQL
$con = mysqli_connect("localhost","root","","todolist");

// Cek konekksi dengan mySQL
if(mysqli_connect_errno()){
    echo "Koneksi gagal ". mysqli_connect_error();
    Keluar();
}else{
    echo "Koneksi berhasil";
}

// membaca data dari tabel mysql.
$query = "SELECT * FROM todo WHERE id='$id'";

// tampilkan data dengan menjalankan sql query
if ($result = mysqli_query($con, $sql)) {
    echo "<br>data tersedia";
    while($user_data = mysqli_fetch_assoc($result)) {
        $kode = $user_data['kode'];
        $todo = $user_data['todo'];
    }
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

// tutup koneksi sql
mysqli_close($con);

}
// tangkap data dari form submit
if (isset($_POST['submit'])){
    //var_dump($_POST);
    $kode = $_POST['kode'];
    $todo = $POST['todo'];
    // buat koneksi denan mysql
    $con = mysqli_connect("localhost","root","","todo");

    // cek koneksi dengan mysql
    if(mysqli_connect_errno()){
        echo "Koneksi gagal ". mysqli_connect_error();
        Keluar();
    }else{
        echo "Koneksi berhasil";
    }
    // buat sql query untuk insert ke database
    // buat query insert dan jalanakan
    $sql = "UPDATE todo SET kode='$kode',todo='$todo' WHERE id='$id' ";

    // jalankan query
    if(mysqli_query($con, $sql)){
        echo "Data baru berhasil diperbaharui";
    }else{
        echo "Error:" . $sql . "<br>" . mysqli_connect_error($con);
    }


// tutup koneksi dengan database
mysqli_close($con);

}

?>

