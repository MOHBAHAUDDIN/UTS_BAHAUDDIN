<?php
include 'inc_koneksi.php';

if (isset($_POST['aksi'])) {
    if ($_POST['aksi'] == "add") {

        $NAMA= $_POST['NAMA'];
        $JENIS_KELAMIN = $_POST['JENIS_KELAMIN'];
        $TELEPON = $_POST['TELEPON'];
        $ALAMAT = $_POST['ALAMAT'];

        $query = "INSERT INTO karyawan VALUES(null, '$NAMA', '$JENIS_KELAMIN', '$TELEPON', '$ALAMAT')";
        $sql = mysqli_query($koneksi, $query);

        if ($sql) {
            header("location: karyawan.php.");
            //echo "Data Berhasil Di Tambahkan <a href='index.php'>[Home]</a>"; 
        } else {
            echo $query;
        }

        // echo $NAMA." | ".$JENIS_KELAMIN." | ".$TELEPON." | ".$ALAMAT;

        //echo "<br>Tambah Data <a href='index.php'>[Home]</a>"; 
    } else if ($_POST['aksi'] == "edit") {
        echo "Edit Data <a href='index.php'>[Home]</a>";
        //var_dump($_POST);

        $ID_KARYAWAN = $_POST['ID_KARYAWAN'];
        $NAMA= $_POST['NAMA'];
        $JENIS_KELAMIN = $_POST['JENIS_KELAMIN'];
        $TELEPON = $_POST['TELEPON'];
        $ALAMAT = $_POST['ALAMAT'];

        $query = "UPDATE karyawan SET NAMA='$NAMA', JENIS_KELAMIN='$JENIS_KELAMIN', TELEPON='$TELEPON,' ALAMAT='$ALAMAT' WHERE ID_KARYAWAN='$ID_KARYAWAN;";
        $sql = mysqli_query($koneksi, $query);
    }
}



if (isset($_GET['hapus'])) {
    $ID_KARYAWAN = $_GET['hapus'];
    $query = "DELETE FROM karyawan WHERE ID_KARYAWAN = '$ID_KARYAWAN';";
    $sql = mysqli_query($koneksi, $query);
    //echo "Hapus Data <a href='index.php'>[Home]</a>"; 
    if ($sql) {
        header("location: karyawan.php");
        //echo "Data Berhasil Di Tambahkan <a href='index.php'>[Home]</a>"; 
    } else {
        echo $query;
    }
}
