<html>
    <head>
        <title>My Library</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
    </head>
    <body>
        <div class="container">
            <h1>Data Buku</h1>
            <form method="POST", action="simpan.php">
                <div class="form-group">
                    <label for="judul">Judul Buku : </label>
                    <input type="text" name="judul" placeholder="Input Judul Buku" class="form-control">
                </div>
                <div class="form-group">
                    <label for="penulis">Penulis Buku : </label>
                    <input type="text" name="penulis" placeholder="Input Penulis Buku" class="form-control">
                </div>
                <div class="form-group">
                    <label for="judul">Jenis Buku : </label>
                    <input type="text" name="jenis" placeholder="Input Jenis Buku" class="form-control">
                </div>
                <div class="form-group">
                    <label for="judul">Gambar Buku : </label>
                    <input type="file" name="gambar" placeholder="Upload Gambar Buku" class="form-control">
                </div>
                <br></br>
                <button type="submit" name="simpan" class="btn btn-primary btn-xs">Submit</button>
            </form>
        </div>
    </body>
</html>
