<html>
    <head>
        <title>MYLibrary</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
    </head>
</html>

<?php
    $cari=$_POST['cari'];
    $link = mysqli_connect("localhost", "root","","db_buku");
    $result = mysqli_query($link, "select * from buku where judul_buku = '$cari'");
    $jumlah = mysqli_num_rows($result);
    echo 
    

    "
    <div class='container'>
        <div class='row'>
            <nav class='navbar navbar-expand-lg navbar-light bg-white'>
                <div class='container-fluid'>
                    <h1><center>Hasil Pencarian</center></h1>     
                    <center>              
                    <form class='d-flex' role='search' method='post' action='cari.php'>
                        <input type='text' name='cari' class='form-control' placeholder='Cari Data Buku'>
                        &nbsp
                        <button class='btn btn-outline-success' type='submit' value'cari'>Search</button>
                    <form>
                    </center>
                    <a href='index.php' class='btn btn-primary btn-sm' >Kembali</a>
                </div>
            </nav>
        </div>
    </div>";


    while($baris = mysqli_fetch_array($result))
    {
    

    echo "<br>
                <div class='container'>
                    <div class='card' style='width: 100%;'>
                        <ul class='list-group list-group-flush'>
                        <li class='list-group-item list-group-item-warning'><h6>Judul Buku : <h/6> <br> $baris[1]</li>
                        <li class='list-group-item list-group-item-warning'><h6>Penulis Buku : <h/6> <br> $baris[2]</li>
                        <li class='list-group-item list-group-item-warning'><h6>Jenis Buku : <h/6> <br> $baris[3]</li>
                        <li class='list-group-item list-group-item-warning'><h6>Gambar Buku : <h/6> <br> $baris[4]</li>
                        <li class='list-group-item list-group-item-warning'><h6><a href='update.php?id=$baris[0]' class='btn btn-danger btn-xs'>Ubah</a>&nbsp&nbsp&nbsp<a href='hapus.php?id=$baris[0]' class='btn btn-danger btn-xs'>Hapus</a></li>
                        </ul>
                    </div>    
                </div>";

        echo "<br>";
        echo " <div class='container'>
            Jumlah Data: $jumlah
        </div>";

    }
?>
