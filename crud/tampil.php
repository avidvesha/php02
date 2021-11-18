<html>
    <head> 
        <title>My Library</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
    </head>
</html>

<?php
    include './koneksi.php';

    if(isset($_GET['cari-akun'])) {
        include "./cari-akun.php";
    }
        echo 

    "
    <div class='container'>
        <div class='row'>
            <nav class='navbar navbar-expand-lg navbar-light bg-white'>
                <div class='container-fluid'>
                    <h1>Data Buku</h1>                   
                    <a href='index.php' type='button' class='btn btn-primary btn-sm' >Kembali</a>
                    <form class='d-flex' role='search' method='post' action='cari.php'>
                        <input type='text' name='cari' class='form-control' placeholder='Cari Data Buku'>
                        &nbsp
                        <button class='btn btn-outline-success' type='submit' value'cari'>Search</button>
                    <form>
                </div>
            </nav>
        </div>
    </div>";
  
        $sql = "SELECT * FROM buku"; 
        $result = $conn->query($sql);
        $id = 1;

        while ($baris = mysqli_fetch_array($result)){
        echo 
          "<br>
           <div class='container'>
            <ul class='list-group'>
                <li class='list-group-item list-group-item-warning'><h6>ID : <h/6> <br> $id </li>
                <li class='list-group-item list-group-item-warning'><h6>Judul Buku : <h/6> <br> $baris[1]</li>
                <li class='list-group-item list-group-item-warning'><h6>Penulis Buku : <h/6> <br> $baris[2]</li>
                <li class='list-group-item list-group-item-warning'><h6>Jenis Buku : <h/6> <br> $baris[3]</li>
                <li class='list-group-item list-group-item-warning'><h6>Gambar Buku : <h/6> <br> $baris[4]</li>
                <li class='list-group-item list-group-item-warning'><h6><a href='update.php?id=$baris[0]' class='btn btn-danger btn-xs'>Ubah</a>&nbsp&nbsp&nbsp<a href='hapus.php?id=$baris[0]' class='btn btn-danger btn-xs'>Hapus</a></li>
            </ul>
           </div>  
          ";
          $id++;
      }
      $conn->close();


?>