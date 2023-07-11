<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<title>
    </title>
<body>
    <nav class="navbar navbar-dark bg-dark">
            <span class="navbar-brand mb-0 h1">REALSTATE ABHINAYA</span>
        </div>
    </nav>
<div class="container">
    <br>
    <h4><center>DAFTAR RUMAH CANTIK</center></h4>
<?php

    include "koneksi.php";

    if (isset($_GET['koderumah'])) {
        $koderumah=htmlspecialchars($_GET["koderumah"]);

        $sql="delete from rumah where koderumah='$koderumah' ";
        $hasil=mysqli_query($kon,$sql);

            if ($hasil) {
                header("Location:index.php");

            }
            else {
                echo "<div class='alert alert-danger'> Data Gagal dihapus.</div>";

            }
        }
?>


     <tr class="table-danger">
            <br>
        <thead>
        <tr>
       <table class="my-3 table table-bordered">
            <tr class="table-primary">           
            <th>No</th>
            <th>Lokasi</th>
            <th>ID Pemilik</th>
            <th>Nama Pemilik</th>
            <th>Tanggal Beli</th>
            <th>Tanggal Lunas</th>
            <th>Kode Tipe</th>
            <th colspan='2'>Aksi</th>

        </tr>
        </thead>

        <?php
        include "koneksi.php";
        $sql="select * from rumah order by koderumah desc";

        $hasil=mysqli_query($kon,$sql);
        $no=0;
        while ($data = mysqli_fetch_array($hasil)) {
            $no++;

            ?>
            <tbody>
            <tr>
                <td><?php echo $no;?></td>
                <td><?php echo $data["lokasi"]; ?></td>
                <td><?php echo $data["idpemilik"];   ?></td>
                <td><?php echo $data["namapemilik"];   ?></td>
                <td><?php echo $data["tanggalbeli"];   ?></td>
                <td><?php echo $data["tanggallunas"];   ?></td>
                <td><?php echo $data["kode_tipe"]?> </td>
                <td>
                    <a href="updatedatadanhapus.php?koderumah=<?php echo htmlspecialchars($data['koderumah']); ?>" class="btn btn-warning" role="button">Update</a>
                    <a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>?koderumah=<?php echo $data['koderumah']; ?>" class="btn btn-danger" role="button">Delete</a>
                </td>
            </tr>
            </tbody>
            <?php
        }
        ?>
    </table>
    <a href="tambahdatarumah.php" class="btn btn-primary" role="button">Tambah Data</a>
</div>
</body>
</html>
