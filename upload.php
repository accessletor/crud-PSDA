<?php
include "koneksi.php";

//pengecekan tipe harus pdf
$surat = $_FILES['surat']['type']; //mendapatkan mime type
if ($surat == "application/pdf") //mengecek apakah file tersebu pdf atau bukan
{
	$judul     = trim($_POST['judul']);
	$surat = trim($_FILES['surat']['name']);

	$sql = "INSERT INTO upload (judul) VALUES ('$judul')";
 mysqli_query($koneksi,$sql); //simpan data judul dahulu untuk mendapatkan id

 //dapatkan id terkahir
 $query = mysqli_query($koneksi,"SELECT id FROM upload ORDER BY id DESC LIMIT 1");
 $data  = mysqli_fetch_array($query);

 //mengganti nama pdf
 $nama_baru = "file_".$data['id'].".pdf"; //hasil contoh: surat.pdf
 $file_temp = $_FILES['surat']['tmp_name']; //data temp yang di upload
 $folder    = "file"; //folder tujuan

 move_uploaded_file($file_temp, "$folder/$nama_baru"); //fungsi upload
 //update nama file di database
 mysqli_query($koneksi,"UPDATE upload SET surat='$nama_baru' WHERE id='$data[id]' ");

 header('location:index.php?pesan=upload-berhasil');

} else
{
	echo "Gagal Upload File Bukan PDF! <a href='index.php'> Kembali </a>";
}

?>