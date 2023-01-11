<?php
include("koneksi.php");
if(isset($_POST['tambah'])){
    $nama=$_POST['nama'];
    $kelas=$_POST['kelas'];
    $nama_jurusan=$_POST['nama_jurusan'];
    $tahun=$_POST['tahun'];
    $nominal=$_POST['nominal'];

    $sql = "INSERT INTO tb_siswa(nama, kelas) VALUES ('$nama', '$kelas')";
    $query = mysqli_query($koneksi, $sql);

    $sql = "INSERT INTO tb_jurusan(nama_jurusan) VALUES ('$nama_jurusan')";
    $query = mysqli_query($koneksi, $sql);

    $sql = "INSERT INTO tb_spp(tahun, nominal) VALUES ('$tahun', '$nominal')";
    $query = mysqli_query($koneksi, $sql);

    
    if($query){
        header('location:join-tabel.php?status=sukses');
    }else{
        header('location:join-tabel.php?status=gagal');
    }
}
?>