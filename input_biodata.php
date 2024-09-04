<?php
include "koneksi.php";
$Nama=$_POST['Nama'];
$tempat_lahir=$_POST['tempat_lahir'];
$alamat=$_POST['alamat'];
$gender=$_POST['gendeR'];
$hobi=$_POST['hobi'];
$no_tlp=$_POST['no_tlp'];
$email=$_POST['email'];
$sekolah=$_POST['sekolah'];
$aksi=mysqli_query($koneksi, "insert into biodata (id,nama,tempat_lahir,tgl_lahir,alamat,gender,hobi,no_tlp,email,sekolah) VALUE
('','$nama','$tempat_lahir','$tgl_lahir','$alamat','$gender','$hobi','$no_tlp','$email','$sekolah')");

?>