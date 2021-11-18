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
    <br>
    <h1><center>MYLibrary</center></h1>
    <div class='container'>
        <div class='row'>
            <nav class='navbar navbar-expand-lg navbar-light bg-white'>
                <div class='container-fluid'>      
                    <form class='d-flex' role='search' method='post' action='cari.php'>         
                        <input type='text' name='cari' class='form-control' placeholder='Cari Data Buku'>
                        &nbsp
                        <button class='btn btn-outline-success' type='submit' value'cari'>Search</button>
                    </form>
                </div>
            </nav>
            &nbsp
            <a href='formulir.php' class='btn btn-info btn-lg' >Tambah Data</a>
            &nbsp
            <a href='tampil.php' class='btn btn-info btn-lg' >Tampil Data</a>
        </div>
    </div>";

