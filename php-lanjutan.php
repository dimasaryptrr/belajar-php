<?php

$nama = "Dimas";

/*
echo $nama;
echo "<br/>";
echo $nama;
echo "<br/>";
echo $nama;
echo "<br/>";
echo $nama;
echo "<br/>";
echo $nama;
*/

// PERULANGAN

/*
$no = 10;

for ($i=0; $i<$no; $i++) {
    echo $i." ".$nama. "<br/>";
}
*/

/*
$no = 10;
$i = 0;
while ($i < $no) {
    echo $i." ".$nama. "<br/>";
    $i++;
}
*/

// 

/*
$no = 10;
$i = 0;

do {
    $n = $i + 1;
    echo $n. " ".$nama. "<br/>";
    $i++;
} while ($i < $no)
*/

// $data = array('Avanza', 'Lamborghini', 'Tesla', 'Xenia', 'Rubicon');

// echo $data[5];
/*
foreach($data as $value) {
    echo $value. "<br/>";
 
}
*/

// PERCABANGAN
/*
if ($nama == "Dimas") {
    echo $nama." adalah orang NTB";
} else {
    echo $nama." bukan orang NTB";
}
*/

/*
switch($nama) {
    case "Dimas";
        $pesan = $nama." adalah orang NTB";
    break;
    case "Rafiif";
        $pesan = $nama." adalah orang Malang";
    break;
    default;
        $pesan = $nama. " darimana ya?";
}

echo $pesan;
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Input Nama dan Diulang</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label>Nama</label>
        <input type="text" name="nama">
        <label>Jumlah</label>
        <input type="text" name="no">
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        if(!empty($_POST['submit'])) {

            switch($_POST['nama']) {
                case "Dimas":
                    $pesan = $_POST['nama']." adalah orang NTB";
                break;
                case "Rafiif":
                    $pesan = $_POST['nama']." berasal dari Malang";
                break;
                default:
                    $pesan = $_POST['nama']." darimana ya?";
            
            }

            for ($i=0;$i<$_POST['no'];$i++) {
                echo $pesan."<br>";
            }

        } else {
            echo "Silakan masukkan Nama dan Jumlah terlebih dahulu!";
        }
    ?>   
</body>
</html>