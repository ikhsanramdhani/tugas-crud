<?php
include("config.php");

if( !isset($_GET['id'])){
    header('Location: index.php');
}

$nim = $_GET['id'];

$sql = "SELECT * FROM mahasiswa WHERE nim=$nim";
$query = mysqli_query($koneksi, $sql);
$mhs = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1){
    die("data tidak ditemukan....");
}
?>

<!DOCTYPE html> 
<html> 
<head> 
	<title>Edit Data Mahasiswa</title> 
</head> 
<body> 
<header> 
	<h2>Edit Data Mahasiswa</h2> 
</header> 
<form action="proses-edit.php" method="POST"> 
	<fieldset> 
	
<p> 
	<label for="nim">NIM : </label>  
	<input type="text" name="nim" placeholder="NIM" value="<?php echo $mhs['nim'] ?>" /> 
</p> 

<p>
	<label for="nama_lengkap">Nama : </label> 
	<input type="text" name="nama_lengkap" placeholder="Nama Lengkap" value="<?php echo $mhs['nama_lengkap'] ?>" /> 
</p> 
<p>
	<label for="tempat_lahir">Tempat Lahir : </label> 
	<input type="text" name="tempat_lahir" placeholder="Tempat Lahir" value="<?php echo $mhs['tempat_lahir'] ?>" /> 
</p> 
<p>
	<label for="tanggal_lahir">Tanggal Lahir : </label> 
	<input type="date" name="tanggal_lahir" placeholder="Tanggal Lahir" value="<?php echo $mhs['tanggal_lahir'] ?>" /> 
</p> 
<p>
	<label for="alamat">Alamat : </label> 
	<input type="text" name="alamat" placeholder="Alamat" value="<?php echo $mhs['alamat'] ?>" /> 
</p> 
<p> 
	<label for="jurusan">Jurusan : </label> 
	<input type="text" name="jurusan" placeholder="Jurusan" value="<?php echo $mhs['jurusan'] ?>" /> 
</p> 
<p>
	<label for="no_hp">No. Hp: </label> 
	<input type="text" name="no_hp" placeholder="No. Hp" value="<?php echo $mhs['no_hp'] ?>" /> 
</p> 
<p>
	<label for="email">Email : </label> 
	<input type="text" name="email" placeholder="email" value="<?php echo $mhs['email'] ?>" /> 
</p> 
<p> 
	<input type="submit" value="Update Data" name="edit" /> 
</p> 
</fieldset> 
</form> 
</body>