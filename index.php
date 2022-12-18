<?php
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
$query = "SELECT * FROM todo";

// tampilkan data dengan menjalankan sql query
$mahasiswa = [];
if ($result = mysqli_query($con,$query)){
    // tampilkan data satu per satu
    while($row = mysqli_fetch_assoc($result)){
        $todo[] = $row;
    }
    mysqli_free_result($result);
}

// tutup koneksi sql
mysqli_close($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To do List </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<section class="vh-100" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-9 col-xl-7">
        <div class="card rounded-3">
          <div class="card-body p-4">

            <h4 class="text-center my-3 pb-3">To Do App</h4>

            <form class="row row-cols-lg-auto g-3 justify-content-center align-items-center mb-4 pb-2">
              <div class="col-12">
                <div class="form-outline">
                  <input type="text" id="form1" class="form-control" />
                  <label class="form-label" for="form1">Masukkan rencanamu</label>
                </div>
              </div>

              <div class="col-12">
                <button type="submit" class="btn btn-primary" a href="update.php?id=<?= $row['id'] ?>">Save</button>
              </div>

              <div class="col-12">
                <button type="submit" class="btn btn-warning">Get tasks</button>
              </div>
            </form>

            <table class="table mb-4">
              <thead>
                <tr>
                  <th scope="col">No.</th>
                  <th scope="col">Todo item</th>
                  <th scope="col">Status</th>
                  <th scope="col">Actions</th>
                </tr>
                <?php foreach($todo as $row): ?>
              </thead>
              <tbody>
                <tr>
                <td><?php echo $row ['kode']; ?></td>
                <td><?php echo $row ['todo']; ?></td>
                <td>Proses</td>
                <td>
                    <button type="submit" class="btn btn-danger" a href="delete.php?id=<?= $row['id'] ?>">Delete</button>
                    <button type="submit" class="btn btn-success ms-1" a href="delete.php?id=<?= $row['id'] ?>">Finished</button>
                </td>
                </tr>
              </tbody>
              <?php endforeach; ?>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>