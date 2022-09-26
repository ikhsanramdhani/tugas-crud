<?php 
include("config.php");

// cek apakah tombol daftr sudah di klik atau belum
if(isset($_POST['submit'])){
    // ambil data dari formulir
    $nim = $_POST['nim'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $jurusan = $_POST['jurusan'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];
    
    

    // buat query
    $sql = "INSERT INTO mahasiswa(nim,nama_lengkap,tempat_lahir,tanggal_lahir,alamat,jurusan,no_hp,email) 
    value ('$nim','$nama_lengkap','$tempat_lahir','$tanggal_lahir','$alamat','$jurusan','$no_hp','$email')";
    $query = mysqli_query($koneksi,$sql);

    // apakah query berhasil?
    if($query) {
        // jika berhasil alihkan ke halaman index.php dengan status SUKSES
        header('Location: index.php?status=sukses');
    } else {
        // jika gagal,alihkan ke halaman dengan status GAGAL
        header('Location: index.php?status=gagal');
    }

 
}   else {
    die("Akses Dilarang...");
}
?>