<!DOCTYPE html>
<html>
<head>
    <title>DAFTAR RUMAH CANTIK</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <?php

    include "koneksi.php";

    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    if (isset($_GET['koderumah'])) {
        $koderumah=input($_GET["koderumah"]);

        $sql="select * from peserta where koderumah=$koderumah";
        $hasil=mysqli_query($kon,$sql);
        $data = mysqli_fetch_assoc($hasil);


    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $koderumah=htmlspecialchars($_POST["koderumah"]);
        $lokasi=input($_POST["lokasi"]);
        $idpemilik=input($_POST["idpemilik"]);
        $namapemilik=input($_POST["namapemilik"]);
        $tanggalbeli=input($_POST["tanggalbeli"]);
        $tanggallunas=input($_POST["tanggallunas"]);
        $kode_tipe=input($_POST["kode_tipe"]);

        $sql="update peserta set
			lokasi='$lokasi',
			idpemilik='$idpemilik',
			namapemilik='$namapemilik',
			tanggalbeli='$tanggalbeli',
			tanggallunas='$tanggallunas'
            kode_tipe='$kode_tipe'
			where koderumah=$koderumah";

        $hasil=mysqli_query($kon,$sql);

        if ($hasil) {
            header("Location:index.php");
        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";

        }

    }

    ?>
    <h2>Update Data</h2>


    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div class="form-group">
            <label>Lokasi:</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukan Lokasi" required />

        </div>
        <div class="form-group">
            <label>ID Pemilik:</label>
            <input type="text" name="idpemilik" class="form-control" placeholder="Masukan Nama ID Pemilik" required/>
        </div>
        <div class="form-group">
            <label>Nama Pemilik :</label>
            <input type="text" name="namapemilik" class="form-control" placeholder="Masukan Nama Pemilik" required/>
        </div>
        <div class="form-group">
            <label>Tanggal Beli:</label>
            <input type="date" name="tanggalbeli" class="form-control" placeholder="Masukan Tanggal Beli" required/>
        </div>
        <div class="form-group">
            <label>Tanggal Lunas:</label>
            <input type="date" name="tanggallunas" class="form-control" placeholder="Masukan Tanggal Lunas" required/>
        </div>
        <div class="form-group">
            <label>Kode Tipe:</label>
            <input type="text" name="kode_tipe" class="form-control" placeholder="Masukan Kode Tipe" required/>
        </div>


        <input type="hidden" name="koderumah" value="<?php echo $data['koderumah']; ?>" />

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>