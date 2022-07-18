<?php 
 
// menghubungkan dengan koneksi
include 'config/koneksi.php';
 
// menangkap data yang dikirim dari form
$username = mysqli_real_escape_string($koneksi, $_POST["username"]);
$password = mysqli_real_escape_string($koneksi, md5($_POST["password"]));
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"SELECT * FROM user where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);
$data = mysqli_fetch_array($login);


	if($cek > 0){
		session_start();
		include "timeout.php";
		$_SESSION['id'] = $data['id'];
		$_SESSION['username'] = $data['username'];
		timer();
		if($cek){
			header("location:admin/media.php?page=dashboard");
		}
	}else{
		echo "<script>parent.location ='index.php?result=error';</script>";
	}


?>