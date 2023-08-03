<?php
include 'inc_koneksi.php';

if (isset($_POST['aksi'])) {
    if ($_POST['aksi'] == "add") {

        $GAJI_POKOK= $_POST['GAJI_POKOK'];
        $TUNJANGAN = $_POST['TUNJANGAN'];

        $query = "INSERT INTO gaji VALUES(null, '$GAJI_POKOK', '$TUNJANGAN')";
        $sql = mysqli_query($koneksi, $query);

        if ($sql) {
            header("location: gaji.php.");
            //echo "Data Berhasil Di Tambahkan <a href='index.php'>[Home]</a>"; 
        } else {
            echo $query;
        }

        // echo $NAMA." | ".$JENIS_KELAMIN." | ".$TELEPON." | ".$ALAMAT;

        //echo "<br>Tambah Data <a href='index.php'>[Home]</a>"; 
    } else if ($_POST['aksi'] == "edit") {
        echo "Edit Data <a href='gaji.php'>[gaji]</a>";
        //var_dump($_POST);

        $ID_GAJI = $_POST['ID_GAJI'];
        $GAJI_POKOK= $_POST['GAJI_POKOK'];
        $TUNJANGAN = $_POST['TUNJANGAN'];

        $query = "UPDATE gaji SET GAJI_POKOK='$GAJI_POKOK', TUNJANGAN='$TUNJANGAN' WHERE ID_GAJI='$ID_GAJI;";
        $sql = mysqli_query($koneksi, $query);
    }
}


if (isset($_GET['hapus'])) {
    $ID_GAJI = $_GET['hapus'];
    $query = "DELETE FROM gaji WHERE ID_GAJI = '$ID_GAJI';";
    $sql = mysqli_query($koneksi, $query);
    //echo "Hapus Data <a href='index.php'>[Home]</a>"; 
    if ($sql) {
        header("location: gaji.php");
        //echo "Data Berhasil Di Tambahkan <a href='index.php'>[Home]</a>"; 
    } else {
        echo $query;
    }
}
